<?php

namespace App\Http\Controllers\Commerce;


use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){

       return view('commerce.cart');
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1 , $request->price)->associate('App\Models\Product');

       $dublicat = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id ===  $request->id;
        });

       if($dublicat->isNotEmpty()){
           return redirect()->route('cart.index')->with('success_message', 'Item is already is you cart!');
       }

       return redirect()->route('cart.index')->with('success_message', 'Item was added to you cart!');
    }
}
