<?php
use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\StudentController;
// Route to View Home Page
Route::get('/',[StudentController::class, 'index'])->name('index');

// Route to View Home Page and insert data
Route::post('/',[StudentController::class, 'create'])->name('create');

// Route to View Edit form page
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');

// Route to update data of edit form
Route::put('/edit/{id}',[StudentController::class, 'update'])->name('update');

// Route to delete data
Route::get('/delete/{id}',[StudentController::class, 'destroy'])->name('destroy');
