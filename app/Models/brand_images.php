<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand_images extends Model
{
    use HasFactory;
    public function product_brand(){
        return $this->belongsTo(product_brand::class);
    }
}
