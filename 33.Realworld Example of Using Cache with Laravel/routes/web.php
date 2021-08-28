<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Route For Home Page
Route::get('/',[StudentController::class,'index']);