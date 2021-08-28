<?php


use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\StudentController;

// Route For Home Page
Route::get('/',[StudentController::class, 'showData']);