<?php

namespace App\Http\Controllers\Commerce;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $gitHub = Socialite::driver('github')->user();
        $user = User::where('provider_id', $gitHub->id)->first();

        if(!$user){
            $user = User::create([
                'email' => $gitHub->email,
                'name'  => $gitHub->nickname,
                'provider_id' => $gitHub->id
            ]);
        }
         Auth::login($user,true);
         return redirect()->route('home.index');
    }
}

