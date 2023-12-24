<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeControl extends Controller
{
    public function welcomeName()
    {
        $name = 'John';
        return view('index',['name'=>$name]);
    }
}
