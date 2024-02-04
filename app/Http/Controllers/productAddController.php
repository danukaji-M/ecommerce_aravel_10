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
        $jsonData = $request->json()->all();
        $formData = $jsonData['formData'];
        $actualJsonData = $jsonData['jsonData'];
        $actualJsonData2 = $jsonData['jsonData2'];
        try {

            DB::insert("
            INSERT INTO `product`
            (`product_name`, `product_price`, `product_description`, 
            `product_status`, `product_category_id`, `product_brand_id`, 
            `product_count`, `seller_email`,`shipping_price`) VALUES 
            ('" . $formData['name'] . "', '" . $formData['price'] . "', 
            '" . $formData['description'] . "', '1', '" . $formData['category'] . "', 
            '" . $formData['brand'] . "', '" . $formData['qty'] . "', 
            '" . session('email') . "', '" . $formData['shipping'] . "')
            ");
            $product = DB::select("
            SELECT * FROM `product` WHERE 
            `product_name` = '" . $formData['name'] . "' AND 
            `seller_email` = '" . session('email') . "' ORDER BY id DESC LIMIT 1
            ");
            $product_id = $product[0]->id;
            //insert product 
            DB::insert("
            INSERT INTO `product_click`
            (`product_id`,`clicks`) VALUES ('" . $product_id . "','1')
            ");
            //insert colors
            DB::insert("
            INSERT INTO `product_has_color`
            (`product_id`,`color_id`) VALUES ('" . $product_id . "','" . $formData['color'] . "')
            ");
            //insert storage
            if ($formData['category'] == 1) {
                $i = 0;
                foreach ($actualJsonData as $data) {
                    $i = $i + 1;
                    if ($data) {
                        DB::insert("
                    INSERT INTO `product_has_storage_size_capacity_size`
                    (`product_id`,`storage_size_capacity_size_id`) VALUES ('" . $product_id . "','" . $i . "')
                    ");
                    }
                }
            }
            //insert size
            if ($formData['category'] == 5) {
                $j = 0;
                foreach ($actualJsonData2 as $data) {
                    $j = $j + 1;
                    if ($data && $j == 1) {
                        DB::insert("
                    INSERT INTO `cloth_sizes`
                    (`product_id`,`small`) VALUES ('" . $product_id . "','1')
                    ");
                    } else if ($data && $j == 2) {
                        DB::insert("
                    INSERT INTO `cloth_sizes`
                    (`product_id`,`medium`) VALUES ('" . $product_id . "','1')
                    ");
                    } else if ($data && $j == 3) {
                        DB::insert("
                    INSERT INTO `cloth_sizes`
                    (`product_id`,`large`) VALUES ('" . $product_id . "','1')
                    ");
                    } else if ($data && $j == 4) {
                        DB::insert("
                    INSERT INTO `cloth_sizes`
                    (`product_id`,`xl`) VALUES ('" . $product_id . "','1')
                    ");
                    } else if ($data && $j == 5) {
                        DB::insert("
                    INSERT INTO `cloth_sizes`
                    (`product_id`,`xxl`) VALUES ('" . $product_id . "','1')
                    ");
                    }
                }
            }
        } catch (Exception $e) {
            return $e;
        }
        try {
            for ($i = 0; $i < $formData['file_count']; $i++) {
                $request->validate([
                    'formData.images' . $i => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                ]);
                $image = $formData('images' . $i);
                $imageName = time() . $i . session('email') . uniqid() . '.' . $image->extension();
                $image->move(public_path('product_img'), $imageName);
                DB::insert("
                INSERT INTO `product_img`
                (`product_img`,`product_id`) VALUES
                ('product_img/" . $imageName . "','" . $product_id . "')
                ");
            }
        } catch (Exception $e) {
            return "Add Product Image" . $e;
        }
    }
}
