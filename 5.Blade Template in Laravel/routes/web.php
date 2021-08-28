<?php
use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\ContactController;

// Route with Controller
Route::get('/',[ContactController::class,'show']);
