<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the 'DB' class from the 'Illuminate\Support\Facades' namespace

class sellerProfileController extends Controller
{
    public function sellerProfile(Request $request)
    {
        $seller = DB::select("
            SELECT * FROM `users` INNER JOIN `user_has_user_type` 
            ON `users`.`email` = `user_has_user_type`.`user_email` 
            WHERE `user_has_user_type`.`user_type_id` = 2 AND `users`.`email` = '" . session('email') . "'
        "); // Use the 'DB' class from the 'Illuminate\Support\Facades' namespace

        $products = DB::select("
        SELECT * 
FROM product 
INNER JOIN product_img ON product.id = product_img.product_id 
WHERE product.product_status = 1 AND product.seller_email = '" . session('email') . "'
        ");

        return view('sellerProfile', ['seller' => $seller, 'products' => $products]);
    }
}
