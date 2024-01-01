<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addressModel extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = [
        'ad_ln1',
        'ad_ln2',
        'postal_code',
        'district_id',
        'province_id',
        'city_id',
        'user_email',
        'phone_number',
        'address'
    ];
    public function user(){
        return $this->hasMany('user');
    }
    public function address_type(){
        return $this->hasMany('address_type');
    }
    public function province(){
        return $this->hasMany('province');
    }
    public function district(){
        return $this->hasMany('district');
    }
    public function city(){
        return $this->hasMany('city');
    }
}
