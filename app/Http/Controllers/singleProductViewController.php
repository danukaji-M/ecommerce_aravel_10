<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleProductViewController extends Controller
{
    public function singleProductView()
    {
        return view('singleProductView');
    }
}
