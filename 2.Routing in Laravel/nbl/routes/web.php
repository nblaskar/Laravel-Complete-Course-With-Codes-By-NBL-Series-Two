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

// Default Route
Route::get('/', function () {
    return view('welcome');  
});

// 1)Route Returning String
Route::get('about', function () {
    return "Hello About "; 
});
// 2)Route Parameter
Route::get('user/{u_id}', function ($id) {
    return $id; 
});
// 3)Route with Multiple Parameter
Route::get('post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id ) {
    return "Post ID :" . $post_id . "Comment ID: " . $comment_id; 
});
// 4)Optional Route Parameter
Route::get('student/{name?}', function ($name=null) {
    return "Hello" . $name ;
});
Route::get('teacher/{name?}', function ($name="Rahul") {
    return "Hello" . $name ;
});
// 5)Routes Parameter and Regular Expression
// -->With Single Parameter
Route::get('product/{p_name}', function ($name) {
    return "Product Name: " . $name;
})->where('p_name','[A-Za-z]+');

// -->With Multiple Parameter
Route::get('manager/{id}/{name}', function ($id,$name) {
    return "Manager ID: " . $id . "Manager Name: " . $name; 
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// 6)Routes Parameter and Regular Expression With Helper Method
// -->With Single Parameter
Route::get('goods/{id}', function ($id) {
    return "Goods ID: " . $id;
})->whereNumber('id');

// -->With Multiple Parameter
Route::get('employee/{id}/{name}', function ($id,$name) {
    return "Employee ID: " . $id . "Employee Name: " . $name; 
})->whereNumber('id')->whereAlpha('name');


Route::get('user/{id}', function ($id) {
    return $id;
})->whereUuid('id');

// 7)Redirect Routes
Route::redirect('/from1','/to1');
Route::redirect('/from2','/to2' , 301);
Route::permanentRedirect('/from3','/to3');

// 8)Fallback Routes
Route::fallback(function(){
    return "Page Not Found";
});

