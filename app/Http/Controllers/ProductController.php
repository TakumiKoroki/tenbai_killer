<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest; 
use App\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }
    
    public function index(Product $product)
    {
        return view('product.index')->with(['products' => $product->get()]);  
    }

    public function show(Product $product)
    {
        return view('product.show')->with(['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with(['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    { 
        $input_product = $request['product'];
        $product->fill($input_product)->save();
        return redirect('/products/'.$product->id);
    }
    
    public function store(SellerRequest $request, Product $product)
    {
        $input_product = $request['product'];
        $product->fill($input_product)->save();
        return redirect('/products/'.$product->id);
    }
}