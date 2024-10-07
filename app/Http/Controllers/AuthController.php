<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('authentication.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
    // Validate the form data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed, redirect to the dashboard or home
        return redirect()->intended('/');
    }

        // Authentication failed, redirect back to login with error
        return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

    // Handle the logout request
     public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegistrationForm()
    {
        return view('authentication.register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Redirect to home
        return redirect('/');
    }
}