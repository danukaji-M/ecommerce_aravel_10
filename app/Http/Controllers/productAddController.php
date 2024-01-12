<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productAddController extends Controller
{
    public function addProduct(Request $request){
        return view('addProduct');
    }
}
