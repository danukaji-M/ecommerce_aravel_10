<?php

// app/Http/Controllers/loginProcess.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginProcess extends Controller
{
    public function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Attempt to authenticate the user manually
        if (auth()->attempt($credentials)) {
            if($request->input('remember')==1){
                cookie::queue('emial',$request->input('email'),60*60*24*356);
                cookie::queue('password',$request->input('password'),60*60*24*356);
            }else{
                cookie::queue('emial',$request->input('email'),-1);
                cookie::queue('password',$request->input('password'),-1);
            }
            return "Success";
        }
    
        // Authentication failed
        return "Fail";
    }
}
