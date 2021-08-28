<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route for Home Page
Route::get('/',[StudentController::class, 'index']);