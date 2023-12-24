<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage_size_capacity_size extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsToMany(product::class);
    }
}
