<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DeliveryDetailsController;
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

Route::get('/load', [CartController::class, 'load']);
Route::get('/', function () {
    $products_slider = Product::take(3)->get();  // prve 3 produkty
    $products_top = Product::orderBy('id', 'desc')->take(3)->get(); // posledne 3 produkty
    return view('eshop.index')->with('products_top', $products_top)->with('products_slider', $products_slider);
});

Route::resource('produkt', ProductController::class);

Route::post('cart/delivery', [CartController::class, 'validateDelivery'])->name('validateDelivery');

Route::get('filter/{category}', [ProductController::class, 'getCategory']);
Route::get('filter/{category}/filteros', [ProductController::class, 'filterCat']);
Route::get('filter/{category}/{subcategory}', [ProductController::class, 'getSubcategory']);
Route::get('filter/{category}/{subcategory}/filteros', [ProductController::class, 'filterSubcat']);

Route::get('/search/', [ProductController::class, 'search'])->name('search');

Route::get('cart', [CartController::class, 'index']);
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::patch('update-cart', [CartController::class, 'update']);
Route::delete('remove-from-cart', [CartController::class, 'remove']);

Route::get('cart/transportation', [CartController::class, 'transportation']);
Route::get('cart/delivery', [CartController::class, 'delivery']);

Route::view('faq', "eshop.footer_views.faq");
Route::view('business_conditions', "eshop.footer_views.business_conditions");

// admin routes
Route::get('admin', [AdminController::class, 'index'])->middleware('adminAuth');
Route::get('admin/edit-images/{id}', [AdminController::class, 'loadImages'])->middleware('adminAuth');
Route::post('admin/edit-images/{id}/add', [AdminController::class, 'addImages'])->middleware('adminAuth');
Route::delete('admin/edit-images/{id}/remove', [AdminController::class, 'removeImage'])->middleware('adminAuth');

Route::get('admin/edit/{id}', [AdminController::class, 'loadEdit'])->middleware('adminAuth');
Route::get('admin/{id}/edit', [AdminController::class, 'edit'])->middleware('adminAuth');

Route::post('admin/add',[AdminController::class, 'store'])->middleware('adminAuth');
Route::delete('admin/{id}', [AdminController::class, 'destroy'])->middleware('adminAuth');


require __DIR__.'/auth.php';
