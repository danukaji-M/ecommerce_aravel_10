<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotPassword extends Controller
{
    //forgot password
    public function forgotpass()
    {
        return view('forgotpass');
    }
}
