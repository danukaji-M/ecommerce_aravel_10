<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_brand extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(product::class);
    }
    public function brand_images(){
        return $this->belongsTo(brand_images::class);
    }
}
