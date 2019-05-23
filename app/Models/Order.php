<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'email', 'name', 'address', 'city','username',
        'province', 'postalcode', 'phone', 'name_on_card', 'discount',
        'discount_code', 'subtotal',  'payment_gateway',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function products(){

        return $this->belongsToMany(Product::class);
    }

}
