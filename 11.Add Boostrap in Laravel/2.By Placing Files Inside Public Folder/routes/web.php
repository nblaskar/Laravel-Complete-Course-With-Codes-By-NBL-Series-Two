<?php

use Illuminate\Support\Facades\Route;

// Route For Home Page
Route::get('/', function () {
    return view('welcome');
});
