<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cityModel extends Model
{
    use HasFactory;
    public function address(){
        return $this->belongsTo('address');
    }
    public function district(){
        return $this->belongsTo('district');
    }
}
