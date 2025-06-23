<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $fillable = ['name', 'price', 'image', 'description'];
    protected $casts = [
        'price' => 'integer', // atau 'decimal:2' sesuai tipe
    ];

    
}

