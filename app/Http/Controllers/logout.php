<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class logout extends Controller
{
    public function logout(){
        session()->forget('fname');
        session()->forget('lname');
        session()->forget('email');

        return "Success";
    }
}
