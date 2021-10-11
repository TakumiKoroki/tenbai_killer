<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 protected $fillable = [ 'product_name','JAN_code','suggested_retail_price','released_date','manufacturer'
];
    
}
    


