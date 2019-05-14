<?php

namespace App\Http\Controllers\Commerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){

       return view('commerce.cart');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
