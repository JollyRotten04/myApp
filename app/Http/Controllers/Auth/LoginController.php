<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // Show the login form
    // Inside LoginController

public function showLoginForm()
{
    // dd('Login form method is being called');
    return view('login');
}

public function login(Request $request)
{
    // dd('Login attempt method is being called'); // Add this line
    
    $validated = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    // Debug the input values
    // dd($validated); // Check what values are being passed to Auth::attempt()

    if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        return redirect()->intended('/homepage');
    }

    return redirect()->route('login')->with('error', 'Invalid credentials');
}


}
