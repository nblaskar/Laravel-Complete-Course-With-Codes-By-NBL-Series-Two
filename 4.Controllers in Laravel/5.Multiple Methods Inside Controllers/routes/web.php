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

// import Controller
use App\Http\Controllers\AboutController;

// Multiple Method Inside Controller

Route::get('about1',[AboutController::class, 'show1']);
Route::get('about2',[AboutController::class, 'show2']);

