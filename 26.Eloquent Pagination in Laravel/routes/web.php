<?php
use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\StudentController;

// Route to view Home Page
Route::get('/',[StudentController::class, 'show_data']);