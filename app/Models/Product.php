<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'stock', 'price'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
