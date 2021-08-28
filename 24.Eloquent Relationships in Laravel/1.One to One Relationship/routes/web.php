<?php


use Illuminate\Support\Facades\Route;
// import Controllers
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MobileController;

Route::get('/', function () {
    return view('welcome');
});
// Route to Insert Data by Controller
Route::get('add-datas', [CustomerController::class, 'add_customer_mobile_data']);

// Route to show Data of mobile by customer to mobile Relation
Route::get('show-mobile-data/{id}', [CustomerController::class, 'show_mobile_data']);

// Route to show Data of customer by Inverse mobile to customer Relation
Route::get('show-customer-data/{id}', [MobileController::class, 'show_customer_data']);

// Route of Single Controller to show data of Both Table
Route::get('index/{id}', [IndexController::class, 'index']);