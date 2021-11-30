<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Memory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $memories = Memory::all();
        $colors = Color::all();

        return view('eshop.admin.admin')->with('products', $products)
            ->with('categories', $categories)->with('subcategories', $subcategories)
            ->with('memories', $memories)->with('colors', $colors)
            ->with('total', count($products));
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
        Validator::validate($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',
            'images' => 'required',
        ]);

        // vytvori produkt
        $product = new Product();
        $product->name = $request->input("name");
        $product->category_id = $request->input("category");
        $product->subcategory_id = $request->input("subcategory");
        $product->color_id = $request->input("color");
        $product->memory_id = $request->input("memory");
        $product->price = $request->input("price");
        $product->description = $request->input("description");
        $product->save();

        // nahra kazdy z obrazkov do databazktore pouzivatel vlozil
        foreach($request->file('images') as $img)
        {
            // ulozi fotku fyzicky
            $name = $img->getClientOriginalName();
            $img->move(public_path().'/img/', $name);

            // ulozi fotku do databazy a spoji ju s produktom
            $image = new Image();
            $image->product_id = $product->id;
            $image->filename = $name;
            $image->save();
        }

        return back()->with('success', 'Produkt bol úspešne pridaný!');
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

    public function loadImages($id){
        $product = Product::find($id);
        return view('eshop.admin.images')->with('product', $product);
    }

    public function addImages($request){
        dd($request);
        return redirect()->back();
    }

    public function removeImage($id){
        $image = Image::find($id);

        // vymaze fyzicke obrazky z public/img
        $path = "img/".$image->filename;
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }

        $msg = "Obrázok $image->filename bol vymazaný";

        // vymaze z db
        $image->delete();
        return redirect()->back()->with('success', $msg);
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

        foreach($product->images as $image){
            // vymaze fyzicke obrazky z public/img
            $path = "img/".$image->filename;
            if (File::exists(public_path($path))) {
                File::delete(public_path($path));
            }
            // vymaze z db
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
