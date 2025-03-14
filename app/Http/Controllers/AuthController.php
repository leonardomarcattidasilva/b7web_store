<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class AuthController extends Controller
{
    public function register(): View
    {
        return view('auth.register');
    }

    public function login(): View
    {
        return view('auth.login');
    }
}
