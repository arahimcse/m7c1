<?php

use App\Http\Controllers\MyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [MyController::class,'index']);

Route::get('/greet/{name?}', [MyController::class,'getHi']);
Route::get('/weather/{name}', [MyController::class,'getWeatherDetails']);

//method attached for get and post
Route::get('/form', [MyController::class,'getData']);
Route::post('/form', [MyController::class,'postData']);

//https://laravel.com/docs/10.x/routing
//Routing basic study

//Route Parameters
//Required Parameters
Route::get('/user/{id}', [MyController::class, 'getParams'] );
Route::get('post/{post}/comments/{comment}', [MyController::class,'getPost']);

//Optional Parameters
Route::get('/username/{name?}', [MyController::class,'getUserName']);
