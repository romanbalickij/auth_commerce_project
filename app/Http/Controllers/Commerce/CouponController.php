<?php

namespace App\Http\Controllers\Commerce;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{

    public function coupon(Request $request)
    {
        $coupon = Coupon::findByCoupon($request->coupon);

        if($coupon->isEmpty()){
            return  redirect()->back()->withErrors('invalid coupon code please try again');
        }

        foreach ($coupon  as $discount)
        {

        }
        dd($discount->percent_off);
    }
}
