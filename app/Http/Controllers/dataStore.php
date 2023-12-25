<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\users;
use App\Models\user_type;
use App\Models\userHasUserType;
use Illuminate\Support\Facades\Log;


class dataStore extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'pass' => 'required|string|min:6',
            'pass2' => 'required|same:pass', // Ensure pass2 is the same as password
            'phone' => 'required|string|max:15',
            'gender' => 'required|in:1,2'
        ];

        $messages = [
            'fname.required' => 'The first name field is required.',
            'lname.required' => 'The last name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already in use.',
            'pass.required' => 'The password field is required.',
            'pass.min' => 'The password must be at least :min characters.',
            'pass2.required' => 'The confirmation password field is required.',
            'pass2.same' => 'The confirmation password must match the password field.',
            'phone.required' => 'The phone field is required.',
            'gender.required' => 'The gender field is required.',
            'gender.in:1,2' => 'Choose Your Gender'
        ];

        // Validate the request data with custom messages
        $validator = Validator::make($request->all(), $rules, $messages);

        // If validation fails, return JSON response with error messages
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        $this->validate($request, $rules, $messages);
        //Database error handling
        try {
            users::create([
                'email' => $request->input('email'),
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'password' => Hash::make($request->input('pass')),
                'phone' => $request->input('phone'),
                'gender_gender_id' => $request->input('gender')
            ]);

            userHasUserType::create([
                'user_email' => $request->input('email'),
                'user_type_id' => 3
            ]);

        } catch (\Exception $e) {

            return redirect()->route('error')->with('message', 'Database error: ' . $e->getMessage());
        }


        echo "Success";
    }
}
