<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'color_id','memory_id', 'category_id','subcategory_id', 'file'];
    /**
     * @var mixed
     */

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function first_image(){
        $first_image = $this->hasMany(Image::class)->first();
        if ($first_image)
            return $first_image->filename;
        return null;
    }

    public function cartProducts(){
        return $this->hasMany(CartProduct::class);
    }

    public function memory(){
        return $this->belongsTo(Memory::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }
}
