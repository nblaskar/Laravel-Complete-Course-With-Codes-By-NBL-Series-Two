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

// 1)Route Returning Views
Route::get('about', function () {
    return view('myabout');
});

// 2)Route Parameter
Route::get('user/{u_id}', function ($id) {
    return view('myuser', ['data'=>$id]);
});
// 3)Route with Multiple Parameter
Route::get('post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id ) {
    return view('mypost',['postid'=>$post_id, 'commentid'=>$comment_id]);
});
// 4)Optional Route Parameter
Route::get('student/{name?}', function ($name=null) {
    return view('mystudent',['name' => $name]);
});

Route::get('teacher/{name?}', function ($name="Rahul") {
    return view('mystudent',['name' => $name]);
});
// 5)Routes Parameter and Regular Expression
// -->With Single Parameter
Route::get('product/{p_name}', function ($name) {
    return view('myproduct',['P_name'=>$name]);
})->where('p_name','[A-Za-z]+');

// -->With Multiple Parameter
Route::get('manager/{id}/{name}', function ($id,$name) {
    return view('mymanager',['id'=>$id, 'name'=>$name]);
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
// 6)Routes Parameter and Regular Expression With Helper Method

Route::get('employee/{id}/{name}', function ($id,$name) {
    return view('myemployee',['id'=>$id, 'name'=>$name]);
})->whereNumber('id')->whereAlpha('name');

// 7)Redirect Routes
Route::view('login','mylogin');
Route::view('register','myregister');
Route::redirect('/login','/register');



Route::redirect('/login','/register' , 301);
Route::permanentRedirect('/login','/register');


// 8)Fallback Routes
Route::fallback(function(){
    return view('mydefault');
});

