<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'color', 'category_id','subcategory_id', 'file'];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function first_image(){
        return $this->hasMany(Image::class)->first()->filename;
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategories(){
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
