<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    // Flush the session to clear all session data
    session()->flush();
    return view('isAdmin');
})->name('isAdmin');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Post route for handling the login
Route::post('/adminPage', function (Request $request) {
    // Capture the input fields (username and password)
    $username = $request->input('username');
    $password = $request->input('password');

    // Check for valid credentials (adjust your logic as needed)
    if ($username === 'admin' && $password === 'password') {
        // Credentials are correct: store username in the session
        $request->session()->put('username', $username);

        // Redirect to the admin page if credentials are valid
        return redirect()->route('adminPage');
    } else {
        // If invalid credentials, redirect back to 'isAdmin' with error message
        return redirect()->route('isAdmin')->with('error', 'Invalid credentials');
    }
})->name('adminPage');

// Admin Page route (GET request)
Route::get('/adminPage', function (Request $request) {
    // Check if username exists in the session
    $username = $request->session()->get('username');

    if (!$username) {
        // If no valid session, redirect to the 'isAdmin' page
        return redirect()->route('isAdmin');
    }

    // Show the admin page if the session has a valid username
    return view('adminPage', ['username' => $username]);
})->name('adminPage');
