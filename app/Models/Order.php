<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $casts = [
        'properties' => 'array'
    ];

    protected $fillable = [
        'user_id', 'email', 'name', 'address', 'city','username',
        'province', 'postalcode', 'phone', 'name_on_card', 'discount',
         'subtotal',  'payment_gateway',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity','properties');
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

    public function createOrderProductTable($id, $quantity, $attribute)
    {
       $value = json_encode($attribute,true);
       $this->products()->attach($id, ['quantity'=> $quantity,'properties' => $value]);
    }
}
