<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::get('/add-author',[HomeController::class,'register']);

Route::get('/verify-author',[HomeController::class,'login']);
Route::post('/verify-author',[HomeController::class,'verify']);

Route::get('/logout',[HomeController::class,'logout']);

Route::get('/add-article',[ArticleController::class,'index']);

Route::delete('/delete/{id}',[ArticleController::class,'delete']);
