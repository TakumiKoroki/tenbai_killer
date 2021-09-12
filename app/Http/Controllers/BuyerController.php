<?php

namespace App\Http\Controllers;
use App\Buyer;
use App\Http\Requests\BuyerRequest; 


class BuyerController extends Controller
{
    public function index(Buyer $buyer)
{
    return $buyer->get();
}

}
