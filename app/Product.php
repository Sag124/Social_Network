<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'details', 'product_image', 'created_at','updated_at'];    
}
