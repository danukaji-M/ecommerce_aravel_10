<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_img extends Model
{
    use HasFactory;
    public function color(){
        return $this->belongsTo(color::class);
    }
    public function product(){
        return $this->belongsTo(product::class);
    }
}
