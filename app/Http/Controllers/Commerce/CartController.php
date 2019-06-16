<?php

namespace App\Http\Controllers\Commerce;


use App\Http\Requests\Cart\AttributeRequest;
use App\Models\AttributeValue;
use App\Models\Coupon;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
    ** new coupon discount amount
    **/
    public function index(){
        $newSubtotal =  Coupon::getCouponDiscount();
        return view('commerce.cart', compact('newSubtotal'));
    }

    public function store(AttributeRequest $request)
    {
        /**If the product already exists in the basket then you do not add it**/
           $dublicates = Product::duplicateProduct($request);

        if($dublicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'Item is already is you cart!');
         }
            $productAttribute = AttributeValue::findAttributesValues($request->get('attributeValue'));
            $productAttribute = AttributeValue::getProductAttribute($productAttribute);
            Product::addToCart($request, $productAttribute);
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
     * remove session coupon discount
     *
     */
    public function destroy($id){
        Cart::remove($id);
        session()->forget('coupon');
        return redirect()->back()->with('success_message', 'Item was delete!');
    }
}


