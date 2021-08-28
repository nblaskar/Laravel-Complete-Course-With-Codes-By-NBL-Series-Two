<?php

use Illuminate\Support\Facades\Route;

// Route for Home Page
Route::get('/', function () {
    return view('home');
});
// Route for Contact Page
Route::get('contact', function () {
    return view('contact');
});
