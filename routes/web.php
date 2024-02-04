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
use App\Http\Controllers;
use App\Http\Controllers\Controller;

Route::get('/',[\App\Http\Controllers\indexController::class,'home']);

Route::get('/signup',[Controllers\HTTPrequests::class,'signUp']);

Route::get('/login',[App\Http\Controllers\HTTPrequests::class,'login']);

Route::post('/dataStore', [App\Http\Controllers\dataStore::class,'store']);

Route::get('/forgotpass',[\App\Http\Controllers\forgotPassword::class,'forgotpass']);

Route::post('/loginProcess' , [App\Http\Controllers\loginProcess::class,'loginProcess']);

Route::post('/logout' , [App\Http\Controllers\logout::class,'logout']);

Route::get('/userprofile' , [App\Http\Controllers\userProfileController::class,'userProfile']);

Route::get('/addressupdate' , [App\Http\Controllers\AddressUpdate::class,'addressUpdate']);

Route::post('/insertAddress' , [App\Http\Controllers\insertAddress::class,'insertAddress']);

Route::get('/seller/myproducts', [App\Http\Controllers\myProductController::class,'myProduct']);

Route::get('/seller/sellerprofile', [App\Http\Controllers\sellerProfileController::class,'sellerProfile']);

Route::get('/navbar', [App\Http\Controllers\navbarController::class,'navbar']);

Route::post('/sellerReg', [App\Http\Controllers\sellerReg::class,'sellerReg']);

Route::get('/sellerReg', [App\Http\Controllers\productController::class,'productView']);

Route::get('/seller/addproduct', [App\Http\Controllers\productAddController::class,'addProduct']);

Route::post('/addproduct', [App\Http\Controllers\productAddController::class,'addProductProcess']);

Route::get('/seller/singleProduct', [App\Http\Controllers\singleProductViewController::class,'singleProductView']);
