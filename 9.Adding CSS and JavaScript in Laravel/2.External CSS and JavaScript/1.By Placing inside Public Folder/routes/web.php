<?php

use Illuminate\Support\Facades\Route;


// Route for Home Page
Route::get('/', function () {
    return view('welcome');
});
