<?php

namespace App\Http\Controllers;

use App\Models\dataread;
use App\Models\gendataread;
use Illuminate\Http\Request;
use PHPUnit\Event\TestSuite\Filtered;
use Illuminate\Support\Facades\DB;

class HTTPrequests extends Controller
{

    public function signUp()
    {
        $data = dataread::all();
        return view('signUpLogin', compact('data'));
    }
    public function login()
    {
        return view('login');
    }

}
