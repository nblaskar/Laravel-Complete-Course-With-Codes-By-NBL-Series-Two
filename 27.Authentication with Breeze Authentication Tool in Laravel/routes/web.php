<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route to Retrieve Authenticated Users
Route::get('show-auth-user', [ShowController::class, 'show_auth_user']);

// Route to Check Authenticated Users
Route::get('check-auth-user', [ShowController::class, 'check_auth_user']);

// 3)Protecting Route to Access Particular View Page
Route::get('report', function () {
    return view('report');
})->middleware('auth'); 
// Note: Now only logedin user can acces this page

// Route For Redirecting Unauthenticated User
Route::get('product', function () {
    return view('product');
})->name('product');

// Route For Manual Logout Feature
Route::get('logout', [ShowController::class, 'manual_logout']);
