<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $query = Rate::query();
        $date = $request->date;

        if($date == 'year')
        {
            $year = date('Y');
            $allRatesCount = $query->clone()->whereYear('created_at', $year)->count();
            $veryGoodCount = $query->clone()->where('rate', 4)->whereYear('created_at', $year)->count();
            $goodCount = $query->clone()->where('rate', 3)->whereYear('created_at', $year)->count();
            $acceptableCount = $query->clone()->where('rate', 2)->whereYear('created_at', $year)->count();
            $poorCount = $query->clone()->where('rate', 1)->whereYear('created_at', $year)->count();
        }elseif($date == 'month'){
            $month = date('m');
            $allRatesCount = $query->clone()->whereMonth('created_at', $month)->count();
            $veryGoodCount = $query->clone()->where('rate', 4)->whereMonth('created_at', $month)->count();
            $goodCount = $query->clone()->where('rate', 3)->whereMonth('created_at', $month)->count();
            $acceptableCount = $query->clone()->where('rate', 2)->whereMonth('created_at', $month)->count();
            $poorCount = $query->clone()->where('rate', 1)->whereMonth('created_at', $month)->count();
        }elseif($date == 'week'){
            // Get the start and end of the current week
            $startOfWeek = now()->startOfWeek()->toDateString();
            $endOfWeek = now()->endOfWeek()->toDateString();
            $allRatesCount = $query->clone()->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            $veryGoodCount = $query->clone()->where('rate', 4)->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            $goodCount = $query->clone()->where('rate', 3)->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            $acceptableCount = $query->clone()->where('rate', 2)->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            $poorCount = $query->clone()->where('rate', 1)->whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
        }else{
            $allRatesCount = $query->clone()->whereDate('created_at', now()->toDateString())->count();
            $veryGoodCount = $query->clone()->where('rate', 4)->whereDate('created_at', now()->toDateString())->count();
            $goodCount = $query->clone()->where('rate', 3)->whereDate('created_at', now()->toDateString())->count();
            $acceptableCount = $query->clone()->where('rate', 2)->whereDate('created_at', now()->toDateString())->count();
            $poorCount = $query->clone()->where('rate', 1)->whereDate('created_at', now()->toDateString())->count();
        }
        

        return view('dashboard.index', compact('veryGoodCount', 'goodCount', 'acceptableCount', 'poorCount', 'allRatesCount'));
    }

}
