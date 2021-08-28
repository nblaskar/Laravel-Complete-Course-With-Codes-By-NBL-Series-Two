<?php
use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\StudentController;

// Route to Add Data into Student Table
Route::get('add-student',[StudentController::class, 'add_student']);

// Route to Show Data
Route::get('student',[StudentController::class, 'show']);

