<?php
use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;

// Route To insert data into Author Table By Controller
Route::get('add-author-data',[AuthorController::class,'add_author_data']);

// Route To insert data into Post Table By Controller
Route::get('add-post-data/{id}',[PostController::class,'add_post_data']);

// Route To Show Post Data based on Author ID For One To Many Relation
Route::get('show-post-data/{id}',[PostController::class,'show_post_data']);

// Route To Show Author Data based on Post ID For Inverse One To Many Relation
Route::get('show-author-data/{id}',[AuthorController::class,'show_author_data']);

// Route of single controller to Show Data of both Table
Route::get('index/{id}',[IndexController::class,'index']);