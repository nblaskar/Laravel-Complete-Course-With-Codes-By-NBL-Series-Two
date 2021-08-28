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


// Pass Data From Route and Access  in Views


// Process-1
// Example:-For Single Data
// Route::get('contact', function () {
//     return view('admin.contactme', ['name'=>'nbl']);
// });
// Example:-For Multiple data
// Route::get('contact', function () {
//     return view('admin.contactme', ['name'=>'nbl', 'roll'=>'101']);
// });

// Example:- For Single Data
// Route::view('contact','admin.contactme',['name'=>'nbl']);

// Example:- For Multiple Data
// Route::view('contact','admin.contactme',['name'=>'nbl', 'roll'=>'101']);


// Process-1
// Example:-Only for Single Data
Route::get('contact', function () {
    return view('admin.contactme')->with('name','nbl');
});