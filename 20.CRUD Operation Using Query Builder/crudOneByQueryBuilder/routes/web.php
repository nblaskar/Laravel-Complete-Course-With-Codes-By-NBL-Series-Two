<?php


use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\StudentController;

// Route To View Home Page
Route::get('/',[StudentController::class, 'index'])->name('index');

// Route to execute after form submit to save data in database
Route::post('/',[StudentController::class, 'create'])->name('create');

// Route Controller for edit Data
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');

// Route Controller for Update Data
Route::put('/edit/{id}',[StudentController::class, 'update'])->name('update');

// Route Controller for Deletion of Data
Route::get('/delete/{id}',[StudentController::class, 'destroy'])->name('destroy');
