<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route for Student View
Route::get('/',[StudentController::class,'index']);
