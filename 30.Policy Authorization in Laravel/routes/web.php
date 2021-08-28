<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// All Breeze Auth Routes
require __DIR__.'/auth.php';

// Route to View Home Page
Route::get('/',[HomeController::class, 'show_all_post'])->name('home');

// // Route To View Post Page
// Route::get('post',[PostController::class, 'index'])->middleware(['auth'])->name('post_index');

// // Route To Insert Post Data ,into Database
// Route::post('post',[PostController::class, 'create'])->middleware(['auth'])->name('post_create');

// // Route to View All Post in Dashboard Section
// Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard');

// // Route to View Edit Post Page
// Route::get('/post/edit/{id}',[PostController::class,'edit'])->middleware(['auth'])->name('post_edit');

// // Route to Update Edit Post Page data
// Route::put('/post/edit/{id}',[PostController::class,'update'])->middleware(['auth'])->name('post_update');

// // Route to Delete data
// Route::get('/post/delete/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('post_destroy');

// // OR


// // Use Route Middloware as Group Meddleware
Route::middleware(['auth'])->group(function () {
    // 4)Using Policy Authorization in Route with Middleware
    // Route To View Post Page with Policy Authorization
    Route::get('post',[PostController::class, 'index'])->middleware(['auth','can:isAdmin, \App\Models\Post'])->name('post_index');

    // Route To Insert Post Data ,into Database
    Route::post('/post',[PostController::class, 'create'])->name('post_create');

    // Route to View All Post in Dashboard Section
    Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');

    // Route to View Edit Post Page
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');

    // Route to Update Edit Post Page data
    Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post_update');

    // Route to Delete data
    Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
    
});