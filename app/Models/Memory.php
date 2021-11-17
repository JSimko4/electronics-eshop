<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $fillable = ['memory'];

    public function products(){
        return $this->hasMany(Product::class, "memory_id");
    }
}
