<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\View\View;

class FlightController extends Controller
{
    public function show(): View
    {
        return view('flight', [
            'flights' => Flight::all(),
        ]);
    }
}
