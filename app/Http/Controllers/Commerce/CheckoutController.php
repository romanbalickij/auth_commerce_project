<?php

namespace App\Http\Controllers\Commerce;


use App\Http\Requests\Checkout\CheckoutRequest;
use App\Mail\OrderProduct;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{

    public function index()
    {
        return view('commerce.checkout');
    }

    public function store(CheckoutRequest $request)
    {
        /**if the product stock is not a customer can not buy it**/
        if(Product::productsAreNoLongerAvailable()) {
            return  back()->withErrors('Sorry! on of the product in your cart is no longer  available');
        }
        $order =  Order::createOrders($request);

        /**insert intro database product_order
        @product_id
        @order_id
        @quantity
         */
        $order->createOrderProductTable(Product::getProductInCart()->id,
            Product::getProductInCart()->qty, Product::orderProductOptions());

        /**quantity control of products**/
        Product:: decreaseQuantities();

        Product::checkoutDetailsCart($request->stripeToken, $request->email);
        Mail::to($request->email)->send(new OrderProduct($order));
        Cart::destroy();
        session()->forget('coupon');
        return redirect()->route('cart.index')->with('success_message', 'Thank you! Your payment been successfully accepted');
    }

}
