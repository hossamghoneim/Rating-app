<?php

namespace App\Http\Controllers\Api;

use App\Events\FileOneImportValidationEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMiniTrackerRequest;
use App\Http\Resources\MiniTrackerResource;
use App\Imports\SmallFile;
use App\Models\CarNumber;
use App\Models\MiniTracker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class MiniTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $miniTrackers = MiniTracker::with('carNumber')->paginate(6);

        return $this->successWithPagination("miniTrackers", MiniTrackerResource::collection($miniTrackers)->response()->getData(true));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMiniTrackerRequest $request)
    {
        $data = $request->except('car_number');
        $carNumber = CarNumber::where('number', $request->validated()['car_number'])->first();
        $todayDate = Carbon::now();

        if($carNumber)
        {
            $data['car_number_id'] = $carNumber->id;
        }else{
            $carNumber = CarNumber::create([
                'number' => $request->validated()['car_number']
            ]);

            $data['car_number_id'] = $carNumber->id;
        }
        $data['date'] = $todayDate->toDateString();

        $miniTracker = MiniTracker::create($data);

        return $this->success("Data created successfully", new MiniTrackerResource($miniTracker));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $miniTracker = MiniTracker::findOrFail($id);

        $miniTracker->delete();

        return $this->success('Data deleted successfully');
    }

    public function upload_excel_file(Request $request)
    {
        set_time_limit(1000);

        $this->validate($request, [
            'file' => 'required|mimes:xlsx'
        ]);

        if ($request->hasFile('file')) {
            // store file and save its name
            $file = Storage::disk('public')->putFileAs(
                'miniFiles',
                request()->file('file'),
                uniqid() . "-" . request()->file('file')->getClientOriginalName()
            );

            //event(new FileOneImportValidationEvent($file));
            Excel::import(new SmallFile, storage_path('app/public/' . $file));

            $miniTrackers = MiniTracker::with('carNumber')->latest()->paginate(6);

            return $this->successWithPagination("File uploaded successfully", MiniTrackerResource::collection($miniTrackers)->response()->getData(true));
        }

        return $this->failure('Error has been occurred while uploading, try again later');
    }
}
