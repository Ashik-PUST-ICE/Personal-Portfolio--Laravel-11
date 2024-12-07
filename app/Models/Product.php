<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'product_name', 'price', 'image'];
  // Allow mass assignment for the fields

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);  // A product belongs to one category
    }
}
