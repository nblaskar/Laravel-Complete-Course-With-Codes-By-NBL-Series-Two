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



// Route with Controller To Return String Without Parameter
// Route::get('about',[AboutController::class, 'show']);


// Route with Controller To Return String Without Parameter
Route::get('about/{name}',[AboutController::class, 'show']);

