<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register User
    public function register(Request $request)
    {
        //validate
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'max:4', 'confirmed'],
        ]);



        //register 
        $user = User::create($fields);

        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
    }
    //login User
    public function login(Request $request)
    {
        //validate
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required'],
        ]);


        // dd($request);
        //Try to login the user
        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    //Logout User
    public function logout(Request $request)
    {
        //logout the user
        Auth::logout();
        //Invalidate user's session
        $request->session()->invalidate();
        //Regenerate CSFR token
        $request->session()->regenerateToken();
        //return to home
        return redirect('/');
    }
}
