<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'item-name',
        'category',
        'quantity-on-hand',
        'reorder-level',
        'minimum-level',
        'maximum-level',
        'supplier-name',
        'contact',
        'unit-cost',
        'total-value',
    ];
}
