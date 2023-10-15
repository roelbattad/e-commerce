<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImages;

class Product extends Model
{
    use HasFactory; use HasImages;

    protected $fillable = [
        'name',
        'description',
        'content'
    ];
}
