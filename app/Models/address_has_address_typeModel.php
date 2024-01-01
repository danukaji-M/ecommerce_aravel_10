<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address_has_address_typeModel extends Model
{
    protected $table = 'address_has_address_type';
    protected $fillable = [
        'address_id',
        'address_type_id'
    ];
    use HasFactory;
}
