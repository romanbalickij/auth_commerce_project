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

         /**знаходим  в  табициі attribute_values  ПО ID АТРИБУТУ
          * поля  attrivute_id and
          * value
           витягуєм  їх і вставляєм  в таблицб продук варіант

          * далі потрбіно з таблиці
          *
          */


            $attributeVariants = AttributeValue::findOrFail($request->get('attribute'));

            $productAttribute = [];
        foreach ($attributeVariants as $attributeVariant)
        {
            foreach ($attributeVariant->attribute()->get() as $attbite){


             $productAttribute[] =  $attbite->name.'-'.$attributeVariant->value;
            }
        }

//                foreach ($attributeVariant as $productAttribute)
//                {
//
//                    Product::find(1)->attributes()
//                        ->attach($productAttribute->id, ['name'=> $productAttribute->value ]);
//                }

        /**If the product already exists in the basket then you do not add it**/
           $dublicates = Product::duplicateProduct($request);

        if($dublicates->isNotEmpty()){
           return redirect()->route('cart.index')->with('success_message', 'Item is already is you cart!');
         }
            Product::addToCart($request,$productAttribute);
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


