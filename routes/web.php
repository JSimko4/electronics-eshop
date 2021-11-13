<?php

use App\Http\Controllers\EshopController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', EshopController::class);

Route::view('index', "eshop.index");
Route::view('filter', "eshop.filter");
Route::view('filter2', "eshop.filter2");
Route::view('product', "eshop.product");
Route::view('basket', "eshop.basket.basket");
Route::view('transportation', "eshop.basket.transportation");
Route::view('delivery', "eshop.basket.delivery");






























