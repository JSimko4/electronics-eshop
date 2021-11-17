<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function subcategories(){
        return SubCategory::all()->where("category_id", $this->id);
    }
}
