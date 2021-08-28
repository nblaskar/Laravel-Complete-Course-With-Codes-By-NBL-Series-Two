<?php


use Illuminate\Support\Facades\Route;


// import Controller
use App\Http\Controllers\ProductController;

// Route with Controller
Route::get('product',[ProductController::class,'show']);