<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request)
    {
        Rate::create([
            'rate' => $request->rate
        ]);

        return redirect()->route('dashboard.success-rate');
    }

    public function successPage()
    {
        return view('home.success-rate');
    }
}
