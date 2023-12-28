<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userProfileController extends Controller
{


    public function userProfile()
    {
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

        $userProfile = DB::select("
        SELECT * FROM `users` JOIN `profile_pic` ON `users`.`email` = `profile_pic`.`user_email`
        WHERE `users`.`email` = '" . $email . "'
        ");


        if ($addressData) {
            return view('userProfile', [
                'addressData' => $addressData,
            ]);
            if ($userProfile) {
                return view('userProfile', [
                    'userProfile' => $userProfile,
                    'addressData' => $addressData
                ]);
            } else {
                return view('userProfile', [
                    'userProfile' => null,
                    'addressData' => $addressData
                ]);
            }
        } else {
            return view('userProfile', [
                'addressData' => null,
                'userProfile' => null
            ]);
        }
    }
}
