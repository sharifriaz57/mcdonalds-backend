<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getImageAttribute($value)
    {
        if(!empty($value)){
            return getProductImgLink().$value;
        }
    }

    public function getProducts()
    {
        return $this->hasMany(Product::class, 'menu_id', 'id');
    }
}
