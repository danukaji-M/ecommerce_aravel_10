<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class districtModel extends Model
{
    use HasFactory;
    public function address(){
        return $this->belongsTo('address');
    }
    public function province(){
        return $this->belongsTo('province');
    }
}
