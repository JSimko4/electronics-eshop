<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['subcategory'];

    public function products(){
        return $this->hasMany(Product::class, "subcategory_id");
    }
}