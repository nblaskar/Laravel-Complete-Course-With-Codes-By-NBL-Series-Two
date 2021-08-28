<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route To view Home Page
Route::get('/',[WelcomeController::class, 'index']);

// You  can aslo use the Session in route as
Route::view('logout', function(){
    if(session()->has('name')){
        session()->flush();
    }
});
