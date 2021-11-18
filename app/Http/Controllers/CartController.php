<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $quantity = 1;
        if($request->input('quantity') !== null){
            $quantity = $request->input('quantity');
        }

        $cart = session()->get('cart');
        $message = 'Produkt ' . $product->name . ' bol pridaný do košíka ' . '(' . $quantity .'ks)';

        // košik je prazdny - pridaj prvy produkt
        if(!$cart) {
            $cart = [
                $id => [
                    "product" => $product,
                    "quantity" => $quantity,
                ],
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', $message);
        }

        // košik nie je prazdny a tento produkt už je v košiku - zvyš jeho množstvo
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', $message);
        }

        // košik nie je prazdny a tento produkt nie je v košiku - pridaj ho
        $cart[$id] = [
            "product" => $product,
            "quantity" => $quantity,
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', $message);
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
    }

    public function validation(Request $request){
        $request->validate([
            'title' => 'bail|required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }

    public function transportation(){
        return view('eshop.cart.transportation');
    }

    public function delivery(){
        $cart = session()->get('cart');
        $total = $this->getTotal($cart);
        return view('eshop.cart.delivery', compact('total'));
    }


    public function index()
    {
        $cart = session()->get('cart');
        $total = $this->getTotal($cart);
        return view('eshop.cart.cart', compact('total'));
    }

    public function getTotal($cart){
        if ($cart == null)
            return 0;

        $total = 0;
        foreach ($cart as $id => $details){
            $total += $details['product']->price * $details['quantity'];
        }

        return $total;
    }
}
