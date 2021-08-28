<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

####################----CRUD Operation Through API----##################################
// 1)Route for All Post Page
Route::get('/allpost',[PostController::class, 'getAllPost']);

// 2)Route for Single Post Page
Route::get('/singlepost/{id}',[PostController::class, 'getPostById']);

// 3)Route for Add Post Path
Route::get('/addpost',[PostController::class, 'addPost']);

// 4)Route for Update Post Path
Route::get('/updatepost/{id}',[PostController::class, 'updatePost']);

// 5)Route for Delete Post Path
Route::get('/deletepost/{id}',[PostController::class, 'deletePost']);


####################----Get Extra Information About API Response----##################################
// Route for Get Info Page
Route::get('/getinfo',[PostController::class, 'getInfo']);