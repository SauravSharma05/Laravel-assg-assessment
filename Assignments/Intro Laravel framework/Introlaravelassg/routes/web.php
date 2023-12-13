<?php

use App\Http\Controllers\AdminController\Homecontroller as AdminControllerHomecontroller;
use App\Http\Controllers\Homecontroller;
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

// user routes
Route::get('/',[Homecontroller::class,'index']);
Route::get('/home',[Homecontroller::class,'index']);

Route::get('/register',[Homecontroller::class,'register']);
Route::get('/login',[Homecontroller::class,'login']);

Route::get('/about',[Homecontroller::class,'about']);
Route::get('/contact',[Homecontroller::class,'contact']);
Route::get('/gallery',[Homecontroller::class,'gallery']);

// admin routes
Route::get('/adminhome',[AdminControllerHomecontroller::class,'index']);
