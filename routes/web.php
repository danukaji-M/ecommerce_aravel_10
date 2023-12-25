<?php

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


Route::get('/',[\App\Http\Controllers\indexController::class,'home']);

Route::get('/signup',[\App\Http\Controllers\HTTPrequests::class,'signUp']);

Route::get('/login',[App\Http\Controllers\HTTPrequests::class,'login']);

Route::post('/dataStore', [App\Http\Controllers\dataStore::class,'store']);

Route::get('/forgotpass',[App\Http\Controllers\HTTPrequests::class,'forgotpass']);

Route::post('/loginProcess' , [App\Http\Controllers\loginProcess::class,'loginProcess']);

Route::post('/logout' , [App\Http\Controllers\logout::class,'logout']);

