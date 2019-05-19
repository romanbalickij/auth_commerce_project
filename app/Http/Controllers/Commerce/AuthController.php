<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Requests\Users\UsersRegisterRequest;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('commerce.auth.register');
    }

    public function register(UsersRegisterRequest $request)
    {
          $user =  User::add($request->all());
          $user->generalPassword($request->get('password'));
          $user->generalToken();
          Mail::to($user)->send(new UserRegisterMail($user));
          return redirect()->back()->with('success_message' ,'Check your mail');
    }

    public function verification($token)
    {
        dd($token);
    }

}
