<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }
    public function register()
    {
        return view('authentication.register');
    }
    public function loginUser()
    {
        return view('authentication.login');
    }
    public function registerUser()
    {
        return view('authentication.register');
    }
}
