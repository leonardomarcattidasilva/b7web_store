<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Contracts\View\View;
use App\Models\StatesModel;
use App\Models\User;
use App\Models\PasswordsModel;
use App\Models\EmailsModel;


class AuthController extends Controller
{
    public function register(): View
    {
        $states = StatesModel::all();
        return view('auth.register', ['states' => $states]);
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function forgotPassword(): View
    {
        return view('auth.forgot');
    }

    public function saveRegister(RegisterRequest $r)
    {
        dd($r->all());
        // $r->validated();
        $user = User::create($r->only(['name', 'state_id']));
        PasswordsModel::create(['user_id' => $user->id, 'password' => $r->password]);
        EmailsModel::create(['user_id' => $user->id, 'email' => $r->email]);
    }
}
