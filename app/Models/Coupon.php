<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{


    public  static function  findByCoupon($code)
    {
        return self:: where('code', $code)->first();
    }

    public function discount()
    {
       return $this->percent_off / 100 * Cart::subtotal();
    }

    public  function saveCouponDiscount()
    {
          session()->put('coupon',$this->discount());
    }

    public   static  function getCouponDiscount(){

        $discount =  session()->get('coupon') ?? 0;
        $result = (Cart::subtotal() - $discount);
        return $result;
    }


}
