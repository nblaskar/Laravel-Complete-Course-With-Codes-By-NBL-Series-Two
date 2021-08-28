<?php


use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\RegController;

// Get Route For Registration Page View
Route::get('/',[RegController::class, 'showform']);

// Post Route for Registration Form Submition
Route::post('/',[RegController::class, 'signup']);


// Route For OldData Page
Route::view('olddata', 'olddata');

// Route For OldData Page with name Route
Route::view('olddata', 'olddata')->name('old');