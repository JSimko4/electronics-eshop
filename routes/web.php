<?php

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

Route::view('filter', "eshop.filter");
Route::view('filter2', "eshop.filter2");
Route::view('product', "eshop.product");
Route::view('basket', "eshop.basket.basket");
Route::view('transportation', "eshop.basket.transportation");
Route::view('delivery', "eshop.basket.delivery");
Route::view('faq', "eshop.footer_views.faq");
Route::view('business_conditions', "eshop.footer_views.business_conditions");
Route::view('admin', "eshop.admin.admin");

Route::get('/', function () {
    return view('eshop.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
