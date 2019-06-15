<?php

namespace App\Http\Controllers\Commerce;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use willvincent\Rateable\Rating;

class HomeController extends Controller
{

     public function index()
     {
       $products = Product::inRandomOrder()->take(10)->get();
       return view('commerce.index', compact('products'));
     }

     public function show($slug)
     {
         $product = Product::where('slug', $slug)->firstOrFail();
         $attributes = $product->attributes()->get();
         $productOptions = $product->values()->get();
         return view('commerce.show', compact('product', 'attributes', 'productOptions'));
     }

    public function postStar (Request $request) {

        $product = Product::find($request->id);
        $rating = new Rating;
        $rating->user_id = 1;
        $rating->rating = $request->rate;
        $product->ratings()->save($rating);
        return redirect()->back();
    }

}
