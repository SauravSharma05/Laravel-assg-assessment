<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, ('index')]);
Route::get('/home', [HomeController::class, ('index')]);


Route::get('/register', [HomeController::class, ('registerpage')])->middleware('guest');
Route::post('/register', [HomeController::class, ('registerdata')]);


Route::get('/login', [HomeController::class, ('loginpage')])->middleware('guest');
Route::post('/login', [HomeController::class, ('loginvalidate')]);

Route::get('/logout',[HomeController::class,'logout']);

Route::get('/forgot-password',[HomeController::class,'forgotpassword']);


Route::get('/addreview',[ReviewController::class,'addreview']);


Route::get('/adminhome',[HomeController::class,'adminhome']);

Route::get('/addmusic', [MusicController::class, ('addmusic')]);
Route::post('/addmusic', [MusicController::class, ('addmusic_data')]);


Route::get('/musiclist', [MusicController::class, ('musiclist')]);
Route::post('/musiclist/{id}', [MusicController::class, ('delmusic')]);

Route::get('/userlist', [MusicController::class, ('userlist')]);
