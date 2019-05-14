<?php

namespace App\Http\Controllers\Commerce;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function index(Request $request){

        if($request->get('sort') == null){
            $products = Product::orderBy('created_at','desc')->paginate(5);
         } else {
            $products = Product::sortByProducts($request->get('sort'));

        }
            $categories = Category::all();
            return view('commerce.shop', compact('products', 'categories'));
    }

    public function category($slug)
    {
       $category = Category::where('slug', $slug)->firstOrFail();;
       $products = $category->products()->paginate(5);

       return view( 'commerce.list', compact('products'));
    }


}
