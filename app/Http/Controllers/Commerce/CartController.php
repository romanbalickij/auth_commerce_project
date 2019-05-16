<?php

namespace App\Http\Controllers\Commerce;


use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){

        $newSubtotal =  Coupon::getCouponDiscount();
        return view('commerce.cart', compact('newSubtotal'));
    }

    public function store(Request $request)
    {

        Cart::add($request->id, $request->name, 1 , $request->price)->associate('App\Models\Product');

       $dublicates = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id ===  $request->id;
        });

       if($dublicates->isNotEmpty()){
           return redirect()->route('cart.index')->with('success_message', 'Item is already is you cart!');
       }
           return redirect()->route('cart.index')->with('success_message', 'Item was added to you cart!');
    }

    /**Update quantity product in Cart*/
    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was update successfully');
        return response()->json(['success' => true]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * remove the product from Сart
     */
    public function destroy($id){

        Cart::remove($id);
        session()->forget('coupon');
        return redirect()->back()->with('success_message', 'Item was delete!');
    }
}
