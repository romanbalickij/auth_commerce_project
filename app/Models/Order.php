<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'email', 'name', 'address', 'city','username',
        'province', 'postalcode', 'phone', 'name_on_card', 'discount',
         'subtotal',  'payment_gateway',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function products(){

        return $this->belongsToMany(Product::class);
    }

    public static function createOrders($order)
    {
        $order =    Order::create([
            'name'      => $order->name,
            'user_id'   => auth()->user() ? auth()->user()->id : null,
            'email'     => $order->email,
            'username'  => $order->username,
            'phone'     => $order->phone,
            'city'      => $order->city,
            'address'   => $order->address,
            'province'  => $order->province,
            'postalcode'=> $order->postalcode,
            'discount'  => session()->get('coupon') ?? 0,
            'subtotal'  => Coupon::getCouponDiscount(),
        ]);
        return $order;
    }

}
