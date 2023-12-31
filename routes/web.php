<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('flight', [FlightController::class, 'show'])->middleware(['auth'])->name('flight');

Route::get('test', function () {
    Log::info('Test');
    for ($x = 0; $x < 10; $x++) {
        dispatch(new \App\Jobs\ProcessPodcast());
    }
});

require __DIR__.'/auth.php';
