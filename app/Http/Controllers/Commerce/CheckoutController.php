<?php

namespace App\Http\Controllers\Commerce;


use App\Http\Requests\Checkout\CheckoutRequest;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    public function index()
    {
        return view('commerce.checkout');
    }

    public function store(CheckoutRequest $request)
    {

        Order::createOrders($request);
        Product::checkoutDetailsCart($request->stripeToken, $request->email);
        Cart::destroy();
        return redirect()->route('cart.index')->with('success_message', 'Thank you! Your payment been successfully accepted');

    }

}
