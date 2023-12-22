<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
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
Route::get('/home',[Homecontroller::class,'index']);


Route::get('/addemp',[EmployeeController::class,'addemp']);
Route::post('/addemp',[EmployeeController::class,'addemp_store']);



Route::get('/emplist',[EmployeeController::class,'emplist']);
Route::post('/emplist/{id}',[EmployeeController::class,'emplist_del']);

Route::get('/updateemp',[EmployeeController::class,'emplist_del']);
Route::post('/updateemp/{id}',[EmployeeController::class,'emplist_del']);


Route::get('send-mail', function () {

        $details = [
            'title' => 'hello',
            'body' => 'hi, This is for testing email using smtp'
        ];

        Mail::to('user@gmail.com')->send(new \App\Mail\Mailtry($details));

        dd("Email is Sent.");
    });
