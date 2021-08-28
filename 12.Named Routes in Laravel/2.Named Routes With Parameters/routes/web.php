<?php


use Illuminate\Support\Facades\Route;


// Route for Home Page
Route::get('/', function () {
    return view('home');
})->name('home');


// Route with  parameter for Post Page
Route::get('post/{category}', function ($cat) {
    return view('post', ['cat'=>$cat]);
})->name('manypost');
