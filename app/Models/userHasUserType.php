<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userHasUserType extends Model
{
    use HasFactory;
    protected $table = 'user_has_user_type';
    protected $fillable = [
        'user_email',
        'user_type_id'
    ];
}
