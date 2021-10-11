<?php

namespace App\Http\Controllers;
use App\Http\Requests\BuyerRequest; 
use App\Buyer;

class BuyerController extends Controller
{
    public function create()
    {
        return view('buyer.create');
    }
    
    public function index(Buyer $buyer)
    {
        return view('buyer.index')->with(['buyers' => $buyer->get()]);  
    }

    public function show(Buyer $buyer)
    {
        return view('buyer.show')->with(['buyer' => $buyer]);
    }

    public function edit(Buyer $buyer)
    {
        return view('buyer.edit')->with(['buyer' => $buyer]);
    }

    public function update(BuyerRequest $request, Buyer $buyer)
    { 
        $input_buyer = $request['buyer'];
        $buyer->fill($input_buyer)->save();
        return redirect('/buyers/'.$buyer->id);
    }
    
    public function store(BuyerRequest $request, Buyer $buyer)
    {
        $input_buyer = $request['buyer'];
        $buyer->fill($input_buyer)->save();
        return redirect('/buyers/'.$buyer->id);
    }
}

