<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

//Route::resource('/', HomeController::class);
Route::resource('produkt', ProductController::class);

Route::get('filter/{category}', [ProductController::class, 'getCategory']);
Route::get('filter/{category}/{subcategory}', [ProductController::class, 'getSubcategory']);

Route::view('product', "eshop.product");
Route::view('basket', "eshop.basket.basket");
Route::view('transportation', "eshop.basket.transportation");
Route::view('delivery', "eshop.basket.delivery");
Route::view('faq', "eshop.footer_views.faq");
Route::view('business_conditions', "eshop.footer_views.business_conditions");
Route::view('admin', "eshop.admin");
Route::view('allProducts', "eshop.allProducts");

Route::get('/', function () {
    $products_slider = Product::take(3)->get();  // prve 3 produkty
    $products_top = Product::orderBy('id', 'desc')->take(3)->get(); // posledne 3 produkty
    return view('eshop.index')->with('products_top', $products_top)->with('products_slider', $products_slider);
});
Route::get('/search/', [ProductController::class, 'search'])->name('search');
require __DIR__.'/auth.php';
