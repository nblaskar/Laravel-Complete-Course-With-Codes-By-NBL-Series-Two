<?php
use Illuminate\Support\Facades\Route;

// Import Controllers
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

// Route To Insert Song Data By Controller
Route::get('add-song',[SongController::class, 'add_song']);

// Route To Insert Song and SingerSong Data By Controller
Route::get('add-singer',[SingerController::class, 'add_singer']);

// Route To show songs data for Many to Many Relation of Singer and Song
Route::get('show-song-data/{id}',[SongController::class, 'show_song_for_singer']);

// Route To show singers data for Inverse Many to Many Relation of Singer and Song
Route::get('show-singer-data/{id}',[SingerController::class, 'show_singer_for_song']);