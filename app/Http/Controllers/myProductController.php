<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myProductController extends Controller
{
    public function myProduct(){
        return view("myProduct");
    }
}
