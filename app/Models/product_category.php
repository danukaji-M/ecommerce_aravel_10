<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(product::class);
    }
    public function category_images(){
        return $this->belongsTo(category_images::class);
    }
}
