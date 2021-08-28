<?php
use Illuminate\Support\Facades\Route;

// Simple route for index page
// Route::get('/', function(){
//     return view('welcome');
// });


                // OR

// Route with Pass Data in views
Route::get('/', function(){
    return view('welcome', ['name'=>'Nur']);
});
