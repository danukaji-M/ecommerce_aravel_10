<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(users::class);
    }
    public function product_type()
    {
        return $this->belongsTo(product_type::class);
    }
    public function product_brandF()
    {
        return $this->belongsTo(product_brand::class);
    }
    public function product_category()
    {
        return $this->belongsTo(product_category::class);
    }
    public function color()
    {
        return $this->belongsToMany(color::class);
    }
    public function storage_size_capacity_size()
    {
        return $this->belongsToMany(storage_size_capacity_size::class);
    }
}
