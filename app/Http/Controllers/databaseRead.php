<?php


namespace App\Http\Controllers;
use App\Models\dataread;
use Illuminate\Http\Request;
use PHPUnit\Event\TestSuite\Filtered;

class databaseRead extends Controller
{

    public function signUp()
    {
        $data = dataread::all();
        return view('signUpLogin', ['data' => $data]);
        return view('signUpLogin');
    }
}
