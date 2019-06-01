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
       $products = Product::inRandomOrder()->take(8)->get();
       return view('commerce.index', compact('products'));
     }

     public function show($slug)
     {
         $product = Product::where('slug', $slug)->firstOrFail();
         $attributes = Attribute::where('product_id', 1)->get();
         return view('commerce.show', compact('product', 'attributes'));
     }

}
