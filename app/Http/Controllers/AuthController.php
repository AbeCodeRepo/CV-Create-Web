<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }



    public function loginPost(Request $request)
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetails)) {
            // return 'success';
            return redirect()->route('index');

        }

        return back()->with('error', 'Email or Password Invalid');
    }

    public function register()
    {
        return view('register');
    }



public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful.');
    }
}
