<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressUpdate extends Controller
{
    public function addressUpdate()
    {
        $addressType = DB::select("SELECT * FROM `address_type`");
        $city = DB::select("SELECT * FROM `city`");
        $district = DB::select("SELECT * FROM `district`");
        $province = DB::select("SELECT * FROM `province`");

        $email = session('email');
        $addressData = DB::select("
        SELECT * FROM `address`
        JOIN `city` ON `address`.`city_id` = `city`.`id`
        JOIN `district` ON `address`.`district_id` = `district`.`id`
        JOIN `province` ON `address`.`province_id` = `province`.`id`
        JOIN `address_has_address_type` AS `aht1` ON `aht1`.`address_id` = `address`.`id`
        JOIN `address_type` ON `aht1`.`address_type_id` = `address_type`.`id`
        WHERE `address`.`user_email` = '" . $email . "'
        
        ");

        if ($addressType) {
            return view('addressUpdate', [
                'addressType' => $addressType,
                'city' => $city,
                'district' => $district,
                'province' => $province,
                'addressData' => $addressData
            ]);
        } else {
            return view('addressUpdate', [
                'addressType' => null,
                'addressData' => null
            ]);
        }
    }
}
