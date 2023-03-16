<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
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

Route::get('/', function () {
    // $event = new Event;
    // $event->name = "Test calendar data";
    // $event->startDateTime = Carbon\Carbon::now();
    // $event->endDateTime = Carbon\Carbon::now()->addHour();

    // $event->save();

    // $e = Event::get();   
    // dd($e);

    return view('welcome');
});


Route::resource('booking', BookingController::class);