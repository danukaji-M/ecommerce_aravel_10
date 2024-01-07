<?php

namespace App\Http\Controllers;

use App\Models\user_type;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellerReg extends Controller
{
    public function sellerReg(Request $request)
    {
        $email = session('email');
        $sellerReg = DB::select("
            SELECT * FROM user_has_user_type
            WHERE user_email = '".$email."' AND user_type_id = 2
        ");
        if ($sellerReg) {
            echo "Alredy Registered";
        }else{
            DB::insert("
                INSERT INTO user_has_user_type (user_email, user_type_id)
                VALUES ('".$email."', 2) ");
            echo "Registered";
        }
    }
}
