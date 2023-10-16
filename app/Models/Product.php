<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'content',
        'brand_id',
        'images',
        'price'
    ];

    protected $casts = [
        'images' => 'array'
    ];
}
