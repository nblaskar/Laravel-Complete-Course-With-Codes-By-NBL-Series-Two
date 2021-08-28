<?php


use Illuminate\Support\Facades\Route;

// Route for Welcome Page
Route::get('/',function(){
    return view('welcome');
});