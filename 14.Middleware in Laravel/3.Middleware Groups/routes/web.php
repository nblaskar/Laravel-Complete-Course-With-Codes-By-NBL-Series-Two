<?php


use Illuminate\Support\Facades\Route;

// Route For Home Page
Route::get('/', function () {
    return view('home');
});

// Route Controller For Report Page
use App\Http\Controllers\ReportController;
Route::get('report', [ReportController::class, 'show']);


// Apply  Group Middleware to Route as 
// Process-1
// individually to Routes
Route::get('stock', function () {
    return view('stock');
})->middleware('mantainance');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('mantainance');

        // OR

// Process-2
// Grouply To Routes
Route::middleware(['mantainance'])->group(function () {
    Route::get('stock', function () {
        return view('stock');
    });

    Route::get('dashboard', function () {
        return view('dashboard');
    });
});


// note:- Group() it is used to assign middleware to a group of routes





