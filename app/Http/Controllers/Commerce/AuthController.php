<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Requests\Users\UserLoginRequest;
use App\Http\Requests\Users\UsersRegisterRequest;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('commerce.auth.register');
    }

    public function register(UsersRegisterRequest $request)
    {
          $user = User::add($request->all());
          $user->generalPassword($request->get('password'));
          $user->generalToken();
          Mail::to($user)->send(new UserRegisterMail($user));
          return redirect()->route('login.form')->with('success_message' ,'Check your mail');
    }

    public function notifications()
    {
        
    }

    public function verification($token)
    {
       User::verificationEmail($token);
       return redirect()->route('login.form')->with('success_message', 'Your email has been successfully verified! Please login');

    }

    public function loginForm()
    {
        return view('commerce.auth.login');
    }

    public function login(UserLoginRequest $request)
    {
        $user = User::checkVerification($request->get('email'));

        if($user->verified ==  null){
            return redirect()->back()->withErrors('please check your email');
        }

        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]))
            return redirect('/');
        {
            return redirect()->back()->withErrors('Invalid login or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }


}


