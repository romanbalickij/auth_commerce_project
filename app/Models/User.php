<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function generalPassword($password)
    {
        if ($password != null) {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

    public function order(){

        return $this->hasMany(Order::class);
    }

    public static function add($value)
    {
        $user =  new static;
        $user->fill($value);
        $user->save();
        return $user;
    }

    public function generalToken()
    {
        $this->token = Str::random(100);
        $this->save();
    }

    public static function verificationEmail($token)
    {
       $user = User::where('token', $token)->firstOrFail();
       $user->token = null;
       $user->email_verified = 1;
       $user->save();
    }

    public static  function  checkVerification($email)
    {
        $user = User::where([
            ['email', '=',  $email],
            ['email_verified', '=', 1]
        ])->first();;
        return $user;
    }
}
