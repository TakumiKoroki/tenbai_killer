<?php

namespace App\Http\Controllers;
use App\Http\Requests\SellerRequest; 
use App\Seller;

class SellerController extends Controller
{
    public function create()
    {
        return view('seller.create');
    }
    
    public function index(Seller $seller)
    {
        return view('seller.index')->with(['sellers' => $seller->get()]);  
    }

    public function show(Seller $seller)
    {
        return view('seller.show')->with(['seller' => $seller]);
    }

    public function edit(Seller $seller)
    {
        return view('seller.edit')->with(['seller' => $seller]);
    }

    public function update(SellerRequest $request, Seller $seller)
    { 
        $input_seller = $request['seller'];
        $seller->fill($input_seller)->save();
        return redirect('/sellers/'.$seller->id);
    }
    
    public function store(SellerRequest $request, Seller $seller)
    {
        $input_seller = $request['seller'];
        $seller->fill($input_seller)->save();
        return redirect('/sellers/'.$seller->id);
    }
}

