<?php

use App\Http\Controllers\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);


Route::get('/proceduretry',[HomeController::class,'proceduretry']);


Route::get('/emplist',[EmployeeController::class,'emplist_show']);
Route::post('/emplist/{id}',[EmployeeController::class,'action']);
// Route::post('/emplist/{id}',[EmployeeController::class,'emplist_del']);


Route::get('/addemp',[EmployeeController::class,'addemp']);
Route::post('/addemp',[EmployeeController::class,'addemp_data']);

Route::get('/updateemp/{id}',[EmployeeController::class,'action']);
Route::post('/updateemp/{id}',[EmployeeController::class,'updateemp']);






