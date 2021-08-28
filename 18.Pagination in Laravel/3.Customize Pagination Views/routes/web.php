<?php


use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\StudentController;

// Route For Home Page with Controller
Route::get('/',[StudentController::class, 'showData']);

// View for Custom pagination URLS
// Route::get('/cs/students/',[StudentController::class, 'showData']);