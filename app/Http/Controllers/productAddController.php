<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class productAddController extends Controller
{
    public function addProduct()
    {

        $category = DB::select("
        SELECT * FROM `product_category`
        ");
        $mobilecapacity = DB::select("
        SELECT * FROM `storage`
        ");
        $brand = DB::select("
        SELECT * FROM `product_brand`
        ");
        $color = DB::select("
        SELECT * FROM `color`
        ");

        return view('addProduct', [
            'category' => $category, 'mobilecapacity' => $mobilecapacity, 'brand' => $brand, 'color' => $color
        ]);
    }
    public function addProductProcess(Request $request)
    {
        try {

            DB::insert("
            INSERT INTO `product`
            (`product_name`, `product_price`, `product_description`, 
            `product_status`, `product_category_id`, `product_brand_id`, 
            `product_count`, `seller_email`,`Shipping_price`) VALUES 
            ('" . $request->input('name') . "', '" . $request->input('price') . "', 
            '" . $request->input('description') . "', '1', '" . $request->input("categorynew") . "', 
            '" . $request->input('brand') . "', '" . $request->input('qty') . "', 
            '" . session('email') . "', '" . $request->input('shipping') . "')
            ");
            $product_id = DB::select("
            SELECT * FROM `product` WHERE `product_name` = '" . $request->input('name') . "' AND `seller_email` = '" . session('email') . "'
            ");
        } catch (Exception $e) {
            return "Data insert Error";
        }
        try {
            for ($i = 0; $i < 3; $i++) {
                $request->validate([
                    'images' . $i => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                ]);
                $image = $request->file('images' . $i);
                $imageName = time() . $i . session('email') . uniqid() . '.' . $image->extension();
                $image->move(public_path('product_img'), $imageName);
            }
        } catch (Exception $e) {
            return "Add Product Image";
        }
    }
}
