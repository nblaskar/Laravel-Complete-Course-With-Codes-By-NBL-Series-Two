<?php


use Illuminate\Support\Facades\Route;

// Route For Home Page
Route::get('/', function () {
    return view('home');
});

// Route For Dashboard Page
Route::get('dashboard', function () {
    return view('dashboard');
});

// Route For Stock Page
Route::get('stock', function () {
    return view('stock');
});

// Route Controller For Report Page
use App\Http\Controllers\ReportController;
Route::get('report', [ReportController::class, 'show']);
