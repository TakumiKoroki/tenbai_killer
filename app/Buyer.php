<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = [
    "name","birth","adress","phone_number","email_adress","updated_at","created_at"
];
}
