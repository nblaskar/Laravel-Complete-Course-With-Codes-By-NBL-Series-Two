<?php


use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\StudentController;

// Route For Home Page with Controller
Route::get('/',[StudentController::class, 'showData']);