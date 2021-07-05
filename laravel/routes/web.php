<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('/contact', [HomeController::class, 'showContact']);

Route::get('/product', [ProductController::class, 'show']);

Route::get('/productName', [ProductController::class, 'showByName']);

Route::get('/productPrice', [ProductController::class, 'showByPrice']);

Route::get('/product/{id}', [ProductController::class, 'product']);

Route::get('/cart', [CartController::class, 'show']);

Route::get('/form', [HomeController::class, 'showForm']);

Route::resource('backoffice', BackOfficeController::class);

Route::resource('category', CategoryController::class);

Route::resource('order', OrderController::class);
