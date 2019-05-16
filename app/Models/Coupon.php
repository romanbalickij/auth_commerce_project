<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{


    public  static function  findByCoupon($code)
    {
        return self:: where('code', $code)->get();
    }

}
