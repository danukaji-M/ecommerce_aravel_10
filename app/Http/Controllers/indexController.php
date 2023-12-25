<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class indexController extends Controller
{
    public function Home()
    {

        $hmProductData = DB::select('
            SELECT * FROM `product`
            JOIN `product_img` ON `product`.`id` = `product_img`.`product_id`
            JOIN `product_brand` ON `product`.`product_brand_id` = `product_brand`.`id`
            JOIN `product_category` ON `product`.`product_category_id` = `product_category`.`id`
            JOIN `brand_click` ON `product_brand`.`id` = `brand_click`.`brand_id`
            JOIN `category_click` ON `product_category`.`id` = `category_click`.`category_id`
            JOIN `product_click` ON `product_click`.`product_id` = `product`.`id`
            WHERE `product`.`product_status` = 1
            ORDER BY `product`.`created_at` DESC, `category_click`.`clicks` ASC, `brand_click`.`clicks` ASC, `product_click`.`clicks` ASC
            LIMIT 4
        ');

        return view('index', ['hmProductData' => $hmProductData]);
        // Check if the query returned any results
        if ($hmProductData) {
            // Process the data or pass it to the view
            return view('index', ['hmProductData' => $hmProductData]);
        } else {
            // Handle the case where no data is found
            return view('index', ['hmProductData' => []]); // You can customize this based on your requirements
        }

        return view('index');
    }
}
