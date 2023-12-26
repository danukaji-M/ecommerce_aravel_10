<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_images extends Model
{
    use HasFactory;
    public function product_category(){
        return $this->belongsTo(product_category::class);
    }
}
