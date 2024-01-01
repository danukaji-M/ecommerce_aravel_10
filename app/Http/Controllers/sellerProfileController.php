<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerProfileController extends Controller
{
    public function sellerProfile( Request $request ){
        
        
        return view("sellerProfile");
    }
}
