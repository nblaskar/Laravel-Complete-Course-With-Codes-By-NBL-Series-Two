<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Route to view home page
Route::get('/',[StudentController::class, 'index']);

// Route for Redirection to a Specific Path(1)
Route::get('/about', function(){
    return "Redirected to About Path";
});

// Route for Redirection to a name route path(2)
Route::get('/login', function(){
    return "Redirected to login Path";
})->name('login');

// Route to view Profile page(5)
Route::view('/profile','profile');

// //In the Same way, You can aslo redirect from Roulte also
Route::get('/userdata',function(){
    // Here you can write the code to redirect
    return redirect('/about');
});