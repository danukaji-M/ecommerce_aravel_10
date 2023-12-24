<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    public function logout(){
        session()->forget('fname');
        session()->forget('lname');
        session()->forget('email');
        return "Success";
    }
}
