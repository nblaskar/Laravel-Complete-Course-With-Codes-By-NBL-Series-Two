<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Import the Request Class
use Illuminate\Http\Request;

// Route to view home page
Route::get('/',[StudentController::class, 'index']);

// You  can also access all request informations in the route also
Route::get('/profile', function(Request $request){
    //Here you can apply all the request inpormation process
    dd($request);
});

// Send Data from Route to Controller(B)
Route::get('/{id}',[StudentController::class, 'index1']);

// Route For particular Path checking(C)
Route::get('/admin/one',[StudentController::class, 'index2']);
Route::get('/other/one',[StudentController::class, 'index2']);


// Route For particular name route checking(D)
Route::get('/admin/two',[StudentController::class, 'index3'])->name('admin.two');
Route::get('/other/two',[StudentController::class, 'index3'])->name('other.two');