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
        return redirect()->back()->with('success', $message);
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function index()
    {
        return view('eshop.cart.cart');
    }
}
