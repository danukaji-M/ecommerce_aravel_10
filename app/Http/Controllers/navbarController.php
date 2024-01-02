<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB class
use Illuminate\Support\Facades\View;
class navbarController extends Controller
{
    public function navbar()
    {

        $buyerData = DB::select("
        SELECT * FROM `users` 
        INNER JOIN `user_has_user_type` ON `users`.`email` = `user_has_user_type`.`user_email`
        INNER JOIN `user_type` ON `user_has_user_type`.`user_type_id` = `user_type`.`id`
        WHERE `user_type`.`user_type_name` = 'cutomer' AND `users`.`email` = '" . session('email') . "'
        ");
        $buyerRow = count($buyerData);
        $sellerData = DB::select("
        SELECT * FROM `users` 
        INNER JOIN `user_has_user_type` ON `users`.`email` = `user_has_user_type`.`user_email`
        INNER JOIN `user_type` ON `user_has_user_type`.`user_type_id` = `user_type`.`id`
        WHERE `user_type`.`user_type_name` = 'seller' AND `users`.`email` = '" . session('email') . "'
        ");
        $sellerRow = count($sellerData);
    }
}
