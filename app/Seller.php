<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [ 'seller_name','seller_birth','seller_adress','seller_email_adress',
    'seller_phone_number ','store_name','store_adress','store_phone_number',
];
}
