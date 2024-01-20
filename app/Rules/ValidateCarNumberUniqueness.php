<?php

namespace App\Rules;

use App\Models\CarNumber;
use App\Models\MiniTracker;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidateCarNumberUniqueness implements ValidationRule
{
    private $carsGroup;
    private $urlsGroup;
    private $miniTrackerID;

    public function __construct($miniTrackerID = null, $carsGroup = null, $urlsGroup = null) 
    {
        $this->carsGroup = $carsGroup;
        $this->urlsGroup = $urlsGroup;
        $this->miniTrackerID = $miniTrackerID;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->carsGroup)
        {
            $carNumber = CarNumber::where('number', $value)->first();
            if($carNumber)
            {
                $miniTrackers = MiniTracker::where('car_number_id', $carNumber->id)
                    ->where('date', Carbon::now()->toDateString())
                    ->get();
                
                foreach($miniTrackers as $miniTracker)
                {
                    $foundCar = collect($this->carsGroup)->contains($carNumber->number); 
                    $foundUrl = collect($this->urlsGroup)->contains($miniTracker->url);

                    if($foundCar && $foundUrl)
                    {
                        $fail(__('Car number ') . $value . __(' has already been taken'));
                    }
                }
            }
        }else{
            $carNumber = CarNumber::where('number', request()->car_number)->first();
            if($carNumber)
            {
                if($this->miniTrackerID)
                {
                    if(MiniTracker::where('id', '!=', $this->miniTrackerID)->where('car_number_id', $carNumber->id)->where('date', Carbon::now()->toDateString())->where('url', request()->url)->first())
                    {
                        $fail(__('Car number ') . $value . __(' has already been taken'));
                    }
                }else{
                    if(MiniTracker::where('car_number_id', $carNumber->id)->where('date', Carbon::now()->toDateString())->where('url', request()->url)->first())
                    {
                        $fail(__('Car number ') . $value . __(' has already been taken'));
                    }
                }
            }
        }
        
    }
}
