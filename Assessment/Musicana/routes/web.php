<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, ('index')]);
Route::get('/home', [HomeController::class, ('index')]);


Route::get('/register', [HomeController::class, ('registerpage')])->middleware('guest');
Route::post('/register', [HomeController::class, ('registerdata')]);


Route::get('/login', [HomeController::class, ('loginpage')])->middleware('guest');
Route::post('/login', [HomeController::class, ('loginvalidate')]);

Route::get('/logout',[HomeController::class,'logout']);


Route::get('/adminhome',[HomeController::class,'adminhome']);

Route::get('/addmusic', [HomeController::class, ('addmusic')]);
Route::post('/addmusic', [MusicController::class, ('addmusic_data')]);


Route::get('/musiclist', [MusicController::class, ('musiclist')]);

Route::get('/userlist', [MusicController::class, ('userlist')]);
