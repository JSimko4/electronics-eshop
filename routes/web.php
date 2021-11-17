<?php

use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    $products_slider = Product::take(3)->get();  // prve 3 produkty
    $products_top = Product::orderBy('id', 'desc')->take(3)->get(); // posledne 3 produkty
    return view('eshop.index')->with('products_top', $products_top)->with('products_slider', $products_slider);
});

Route::resource('produkt', ProductController::class);
Route::get('filter/{category}', [ProductController::class, 'getCategory']);
Route::get('filter/{category}/{subcategory}', [ProductController::class, 'getSubcategory']);
Route::get('/search/', [ProductController::class, 'search'])->name('search');

Route::get('cart', [CartController::class, 'index']);
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::patch('update-cart', [CartController::class, 'update']);
Route::delete('remove-from-cart', [CartController::class, 'remove']);

Route::get('transportation/{total}', [CartController::class, 'transportation']);
Route::get('delivery/{total}', [CartController::class, 'delivery']);
Route::post('delivery/{total}/form', [CartController::class, 'validation']);

Route::view('faq', "eshop.footer_views.faq");
Route::view('business_conditions', "eshop.footer_views.business_conditions");
Route::view('admin', "eshop.admin");
Route::view('allProducts', "eshop.allProducts");

require __DIR__.'/auth.php';
