<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function Home(Request $request)
    {
        $brandView = DB::select('
            SELECT * FROM `product_brand` JOIN `brand_click` ON `product_brand`.`id`= `brand_click`.`brand_id`
            JOIN `brand_images` ON `brand_images`.`product_brand_id` = `product_brand`.`id` ORDER BY 
            `brand_click`.`clicks` ASC LIMIT 6
        ');
        
        $limit = $request->input('i');
        $hmProductData = DB::select('
            SELECT * FROM `product`
            JOIN `product_img` ON `product`.`id` = `product_img`.`product_id`
            JOIN `product_brand` ON `product`.`product_brand_id` = `product_brand`.`id`
            JOIN `product_category` ON `product`.`product_category_id` = `product_category`.`id`
            JOIN `brand_click` ON `product_brand`.`id` = `brand_click`.`brand_id`
            JOIN `category_click` ON `product_category`.`id` = `category_click`.`category_id`
            JOIN `product_click` ON `product_click`.`product_id` = `product`.`id`
            WHERE `product`.`product_status` = 1
            ORDER BY `product`.`created_at` ASC, `category_click`.`clicks` DESC, `brand_click`.`clicks` DESC, `product_click`.`clicks` DESC
            LIMIT '.($limit+4).'
        ');


        $categoryView = DB::select('
            SELECT * FROM `product_category` JOIN `category_click` ON 
            `product_category`.`id` = `category_click`.`category_id` JOIN 
            `category_images` ON `category_images`.`product_category_id` = `product_category`.`id`
            ORDER BY `category_click`.`clicks` DESC LIMIT 4 
        ');

        $newArrive = DB::select('
            SELECT * FROM `product`
            JOIN `product_img` ON `product`.`id` = `product_img`.`product_id` 
            JOIN `product_click` ON `product_click`.`product_id` = `product`.`id`
            WHERE `product`.`product_status` = 1  ORDER BY `product`.`created_at` DESC,
            `product_click`.`clicks` DESC
        ');

        $data = [
            'hmProductData' => $hmProductData,
            'brandView' => $brandView,
            'categoryView' => $categoryView,
            'newArrive' => $newArrive,
            'i'=>$limit
        ];

        if ($data) {
            return view('index', [
                'hmProductData' => $hmProductData,
                'brandView' => $brandView,
                'categoryView' => $categoryView,
                'newArrive' => $newArrive,
                'i'=>$limit
            ]);
        } else {
            return view('index', [
                'hmProductData' => [],
                'brandView' => [],
                'categoryView' => [],
                'newArrive'=>[]
            ]);
        }
    }
}
