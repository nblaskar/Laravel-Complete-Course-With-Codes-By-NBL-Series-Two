<?php


use Illuminate\Support\Facades\Route;

// Route For Home Page
Route::get('/', function () {
    return view('home');
});

// Route for Stock Page
Route::get('stock', function () {
    return view('stock');
});

// Route For Dashboard Page
// Pass Data to Middleware
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('myrole:guest');






