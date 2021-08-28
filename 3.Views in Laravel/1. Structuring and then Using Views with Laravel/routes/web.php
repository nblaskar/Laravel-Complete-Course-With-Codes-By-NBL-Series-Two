<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Structuring and then Using Views with Laravel

Route::get('/', function () {
    return view('welcome');  
});

// Route::get('about', function () {
//     return view('aboutme');
// });
Route::view('about','aboutme');

// Route::get('/adminprofile', function () {
//     return view('admin.profile');
// });

Route::view('adminprofile','admin.profile');