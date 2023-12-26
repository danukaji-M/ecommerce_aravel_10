<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userProfileController extends Controller
{
    public function userProfile(){
        return view('userProfile');
    }
}
