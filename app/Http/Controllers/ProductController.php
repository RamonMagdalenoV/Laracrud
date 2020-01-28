<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('products.index',['list' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public  function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('desc');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect()->route('products.index')->with('message','Store Product Successfully!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',['product' => $product]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->desc;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('products.index')->with('message','Updated Product Successfully!');;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->with('message','Deleted Product');
       // return view('products.edit',['product' => $product]);
    }


}
