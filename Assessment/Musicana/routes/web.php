<?php

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

Route::get('/', [HomeController::class, ('index')]);
Route::get('/home', [HomeController::class, ('index')]);


Route::get('/register', [HomeController::class, ('registerpage')]);
Route::post('/register', [HomeController::class, ('registerdata')]);


Route::get('/login', [HomeController::class, ('loginpage')]);
Route::post('/login', [HomeController::class, ('loginvalidate')]);


Route::get('/addmusic', [HomeController::class, ('addmusic')]);

