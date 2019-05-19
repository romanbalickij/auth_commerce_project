<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Requests\Users\UsersRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('commerce.auth.register');
    }

    public function register(UsersRegisterRequest $request)
    {
          $users =  User::add($request->all());
          $users->generalPassword($request->get('password'));
          return redirect()->route('loginForm');
    }
}
