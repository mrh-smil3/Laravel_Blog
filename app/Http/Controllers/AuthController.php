<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authenticated successfully
            return redirect()->intended('/dashboard');
        } else {
            // Failed authentication
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
