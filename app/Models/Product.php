<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getImageAttribute($value){
        if(!empty($value)){
            return getProductImgLink().$value;
        }
    }
}
