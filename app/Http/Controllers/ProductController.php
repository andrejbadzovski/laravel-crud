<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index() {
        // show all products
        $products=Product::all();
        return view('products.index', ['products'=>$products]);
    }

    public function create() {
        return view('products.create');
    }

    public function edit($product) {
        $product = Product::findOrFail($product);
        return view('products.edit', ['product'=>$product]);
    }

    public function update($product) {

        $validated = request()->validate([
            'sku' => 'required',
            'name' => 'required'
        ]);
        $product = Product::findOrFail($product);
        $product->update($validated);
        return redirect('products');
    }

    public function store(Request $request) {
        // store product in database
        $validated = $request->validate([
            'sku' => 'required',
            'name' => 'required'
        ]);
        Product::create($validated);
        return redirect('products');
    }

    public function show($product) {
        // show single product
        $result = Product::find($product);
        return view('products.show', ['product'=>$result]);
    }


    public function destroy($product) {
        Product::destroy($product);
        return redirect('products');

    }
}
