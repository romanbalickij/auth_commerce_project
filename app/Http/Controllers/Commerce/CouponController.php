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
        if(!$coupon){
            return  redirect()->back()->withErrors('invalid coupon code please try again');
        }
          /**save  discount  in session **/
         $coupon->saveCouponDiscount();
         return redirect()->back()->with('success_message', 'coupon has ben upload');
    }
}
