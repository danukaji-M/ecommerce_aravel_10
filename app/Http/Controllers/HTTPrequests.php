<?php

namespace App\Http\Controllers;

use App\Models\dataread;
use App\Models\gendataread;
use Illuminate\Http\Request;
use PHPUnit\Event\TestSuite\Filtered;

class HTTPrequests extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signUp()
    {
        $data = dataread::all();
        return view('signUpLogin', compact('data'));
        return view('signUpLogin');
    }
    public function login()
    {
        return view('login');
    }
    public function forgotpass(){
        return view('forgotpass');
    }
}
