<?php

use App\Http\Controllers\AdminController\Homecontroller as AdminControllerHomecontroller;
use App\Http\Controllers\EmployeeController\Homecontroller as EmployeeControllerHomecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ImagesController;
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

Route::get('/register',[Homecontroller::class,'register'])->middleware('guest');;
Route::post('/register',[Homecontroller::class,'store']);


Route::get('/login',[Homecontroller::class,'login'])->middleware('guest');;
Route::post('/login',[Homecontroller::class,'validation']);

Route::get('/logout',[EmployeeControllerHomecontroller::class,'logout']);


Route::get('/about',[Homecontroller::class,'about']);
Route::get('/contact',[Homecontroller::class,'contact']);
Route::get('/gallery',[ImagesController::class,'index']);


// admin routes
Route::get('/adminhome',[AdminControllerHomecontroller::class,'index']);

Route::get('/imageupload',[AdminControllerHomecontroller::class,'imageup']);
Route::post('/imageupload',[AdminControllerHomecontroller::class,'upload']);

// macro try
Route::get('/macrotry',[EmployeeControllerHomecontroller::class,'index']);
Route::post('/macrotry',[EmployeeControllerHomecontroller::class,'macrotry']);
