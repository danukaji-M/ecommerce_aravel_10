<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_type extends Model
{
    use HasFactory;
    protected $table = 'user_type';
    public function user_type()
    {
        return $this->belongsToMany(user_type::class, 'user_has_user_type', 'user_type_id', 'user_email');
    }
}
