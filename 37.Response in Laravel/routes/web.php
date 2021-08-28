<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Route to view home page
Route::get('/',[StudentController::class, 'index']);


//In the Same way, You can aslo send response from Roulte also
Route::get('/profile',function(){
    // Here you can write the code to return any response
    return response("Hello from route response");
});