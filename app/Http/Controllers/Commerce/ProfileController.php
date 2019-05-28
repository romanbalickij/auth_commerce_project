<?php

namespace App\Http\Controllers\Commerce;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function index()
    {
        $orders = auth()->user()->order()->with('products')->get();
        return view('commerce.profile', compact('orders'));
    }
}
