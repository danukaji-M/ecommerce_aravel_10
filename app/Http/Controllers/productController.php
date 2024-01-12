<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    public function productView(){
        $products = DB::select("
        SELECT  * FROM products WHERE 
        INNER JOIN product_img ON product.id = product_img.product_id
        status = 1 AND seller_email = '".session('email')."'
        ");
        
        return view('productView', ['products' => $products]);
    }
}
