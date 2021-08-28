<?php


use Illuminate\Support\Facades\Route;


// Route for Home Page
Route::get('/', function () {
    return view('home');
})->name('home');


// Route for About Page
Route::get('about', function () {
    return view('about');
})->name('aboutme');

// Import Controller
use App\Http\Controllers\ContactController;

// Route with Controller For Contact Page
Route::get('contact',[ContactController::class, 'show'])->name('contactus');