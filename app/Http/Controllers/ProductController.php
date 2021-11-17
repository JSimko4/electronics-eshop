<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // link /filter/kategoria -> potrebuje zobrazit dane podkategorie
    public function getCategory($category_name){
        $category = Category::where("name", $category_name)->first();
        $products = $category->products()->orderBy("id", "asc")->paginate(6);
        $subcategories = $category->subcategories();

        return view('eshop.filter')->with(compact('category_name', 'products', 'subcategories'));
    }

    // link /filter/kategorie/podkategoria -> nepotrebuje zobrazovat podkategorie
    public function getSubcategory($category_name, $subcategory_name){
        $subcategory = SubCategory::where("name", $subcategory_name)->first();
        $products = $subcategory->products()->orderBy("id", "asc")->paginate(6);

        return view('eshop.filter')->with(compact('category_name', 'subcategory_name', 'products'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy("id", "asc")->paginate(6);
        return view('eshop.filter')->with('products', $products);
    }
#funkcia na vyhladanie retazca
    public function search(Request $request){

        $search = $request->input('search');


        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();


        return view('eshop.allProducts', compact('products'));
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('eshop.product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
