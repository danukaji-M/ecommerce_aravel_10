<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'email',
        'fname',
        'lname',
        'password',
        'phone',
        'gender_gender_id'
    ];
    public function gender()
    {
        return $this->belongsTo(gender::class);
    }
    public function product()
    {
        return $this->hasMany(product::class);
    }
    public function user_type()
    {
        return $this->belongsToMany(user_type::class, 'user_has_user_type', 'user_email', 'user_type_id');
    }
}
