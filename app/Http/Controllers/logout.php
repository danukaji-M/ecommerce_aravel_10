<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class logout extends Controller
{
    public function logout(Request $request){

        return "hi";
    }
}
