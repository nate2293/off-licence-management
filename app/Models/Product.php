<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'description',
        'stock_quantity',
        'shopkeeper_id',
        'supplier',
    ];
}
