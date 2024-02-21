<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {
       $product = new Product();
       $product->name = $request->name;
       $product->lastname = $request->lastname;
       $product->document = $request->document;
       $product->phone = $request->phone;

       $product->save();
    }


    public function show(string $id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($request->id);
        $product->name = $request->name;
        $product->lastname = $request->lastname;
        $product->document = $request->document;
        $product->phone = $request->phone;

        $product->save();
        return $product;
    }

    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
