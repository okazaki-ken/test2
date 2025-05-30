<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [ProductController::class,'index']);
Route::get('/products/register',[RegisterController::class,'index']);
Route::post('/products/register',[RegisterController::class,'create']);

Route::get('products/edit',[RegisterController::class,'edit'])->name('products.edit');
Route::post('/products/search',[ProductController::class,'search']);