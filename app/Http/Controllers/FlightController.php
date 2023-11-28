<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Support\Facades\Log;
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
