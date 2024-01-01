<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addressModel; // Add this line
use Illuminate\Support\Facades\DB;
use App\Models\address_has_address_typeModel; // Add this line


class insertAddress extends Controller
{
    public function insertAddress(Request $request)
    {
        $email = session('email');
        $select = " ";
        $addtype = $request->input('db');
        $numRows = DB::table('address')
            ->where('user_email', $email)
            ->count();
        if ($numRows > 2) {
            echo "You Must Delete One Address Before Adding New Address";
        } elseif ($numRows == 0 || $numRows == 1) {
            try {
                addressModel::create([
                    'ad_ln1' => $request->input('line1'),
                    'ad_ln2' => $request->input('line2'),
                    'postal_code' => $request->input('postalcode'),
                    'district_id' => $request->input('district'),
                    'province_id' => $request->input('province'),
                    'city_id' => $request->input('city'),
                    'user_email' => $email,
                    'phone_number' => $request->input('phone')
                ]);
                if($addtype == "1"){
                    address_has_address_typeModel::create([
                        'address_id' => DB::table('address')->where('user_email', $email)->value('id'),
                        'address_type_id' => 1
                    ]);
                    address_has_address_typeModel::create([
                        'address_id' => DB::table('address')->where('user_email', $email)->value('id'),
                        'address_type_id' => 2
                    ]);
                }elseif($addtype == "2"){
                    address_has_address_typeModel::create([
                        'address_id' => DB::table('address')->where('user_email', $email)->value('id'),
                        'address_type_id' => 1
                    ]);
                }elseif ($addtype == "3") {
                    address_has_address_typeModel::create([
                        'address_id' => DB::table('address')->where('user_email', $email)->value('id'),
                        'address_type_id' => 2
                    ]);
                }elseif ($addtype == "4") {
                    #no code here
                }
            } catch (\Illuminate\Database\QueryException $e) {
                echo "Error: " . $e;
            }
        }
        echo "success";
    }
}
