<?php

// app/Http/Controllers/loginProcess.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Illuminate\Http\Request;

class loginProcess extends Controller
{
    public function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::attempt((['email'=>$email,'password'=>$password]))){
            $user = users::where('email',$email)->first();
            $fname = $user->fname;
            $lname = $user->lname;

            $request->session()->put('fname',$fname);
            $request->session()->put('lname',$lname);
            $request->session()->put('email',$email);
        }
        // Attempt to authenticate the user manually
        if (auth()->attempt($credentials)) {
            if($request->input('remember')==1){
                cookie::queue('email',$request->input('email'),60*60*24*356);
                cookie::queue('password',$request->input('password'),60*60*24*356);
            }else{
                cookie::queue('email',$request->input('email'),-1);
                cookie::queue('password',$request->input('password'),-1);
            }

            return "Success";
        }

        // Authentication failed
        return "Wrong Email Or Password";

    }
}
