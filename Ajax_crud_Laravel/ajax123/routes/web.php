<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserController::class,('index')]);
Route::post('/store',[UserController::class,('store')])->name('store');

Route::get('/fetchall',[UserController::class,('fetchall')])->name('fetchall');

Route::get('/edit',[UserController::class,('edit')])->name('edit');
