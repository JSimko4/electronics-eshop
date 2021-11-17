<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "product" => $product,
                    "quantity" => 1,
                ]
            ];
            session()->put('cart', $cart);
            
            $message = 'Produkt ' . $product->name . ' bol uspešne pridaný do košíka!';
            return redirect()->back()->with('success', $message);
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);

            $message = 'Produkt ' . $product->name . ' bol uspešne pridaný do košíka!';
            return redirect()->back()->with('success', $message);        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "product" => $product,
            "quantity" => 1,
        ];

        session()->put('cart', $cart);

        $message = 'Produkt ' . $product->name . ' bol uspešne pridaný do košíka!';
        return redirect()->back()->with('success', $message);    }


    public function index()
    {
        return view('eshop.cart.cart');
    }
}
