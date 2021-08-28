<?php
use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;

// Rote to Insert Mechanic Data
Route::get('add-mechanic',[MechanicController::class,'add_mechanic']);

// Rote to Insert Car Data
Route::get('add-car/{id}',[CarController::class,'add_car']);

// Rote to Insert Owner Data
Route::get('add-owner/{id}',[OwnerController::class,'add_owner']);

// Rote to get Owner Data
Route::get('show-owner/{id}',[OwnerController::class,'show_owner']);