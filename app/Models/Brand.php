<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function categories(){
        return $this->hasMany(Category::class);
    }

     public function products(){
        return $this->hasMany(Product::class,'brand_id');
    }
}
