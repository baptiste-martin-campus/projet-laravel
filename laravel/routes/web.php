<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;

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

Route::get('/backoffice/product', [BackOfficeController::class, 'index']);
Route::get('/backoffice/product/create', [BackOfficeController::class, 'create']);
Route::get('/backoffice/product/edit', [BackOfficeController::class, 'edit']);
Route::post('/backoffice/product', [BackOfficeController::class, 'store']);
