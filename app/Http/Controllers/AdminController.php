<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy("id", "asc")->paginate(6);
        return view('eshop.admin.admin')->with('products', $products)->with('total', count($products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function loadEdit($id){
        $product = Product::find($id);
        return view('eshop.admin.edit')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update(['name' => $request->name]);
        $product->update(['price' => $request->price]);
        $product->update(['description' => $request->description]);

        return redirect('/admin')->with('success', 'Produkt bol upravený!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        // vymaze produkt zo session
        $cart = session()->get('cart');
        if($cart != null and $cart[$id] != null) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);

        // vymaze z db fotky naviazane na produkt
        foreach($product->images as $image){
            $image->delete();
        }

        // vymaze produkt z db ulozeneho košika pouzivatela
        foreach($product->cartProducts as $cartProduct){
            $cartProduct->delete();
        }

        $product->delete();
        return redirect()->back()->with('success', 'Produkt bol vymazaný!');
    }
}
