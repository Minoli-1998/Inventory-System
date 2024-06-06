<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'category',
        'quantity_on_hand',
        'reorder_level',
        'minimum_level',
        'maximum_level',
        'supplier_name',
        'contact',
        'unit_cost',
        'total_value',
    ];
}
