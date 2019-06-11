<?php

namespace App\Http\Controllers\Commerce;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

     public function index()
     {
       $products = Product::inRandomOrder()->take(10)->get();
        // $products = Product::paginate(10);
       return view('commerce.index', compact('products'));
     }

     public function show($slug)
     {
         $product = Product::where('id', 1)->firstOrFail();

         $attributes = $product->attributes()->get();
         $productOptions = $product->values()->get();


         return view('commerce.show', compact('product', 'attributes', 'productOptions'));
     }

}
