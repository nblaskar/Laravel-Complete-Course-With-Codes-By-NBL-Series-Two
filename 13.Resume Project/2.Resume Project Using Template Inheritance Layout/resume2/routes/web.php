<?php

use Illuminate\Support\Facades\Route;

// Route For Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Route For Skill Page
Route::get('skill', function () {
    return view('skill');
})->name('skill');

// Route With Controller For Services Page
use App\Http\Controllers\ServiceController;
Route::get("services",[ServiceController::class, 'show'])->name('service');

// Route With Controller For Services Page
use App\Http\Controllers\ContactController;
Route::get("contact",[ContactController::class, 'show'])->name('contact');