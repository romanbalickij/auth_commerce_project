<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{

    public function products()
    {
        return $this->belongsTo(Product::class,'attribute_id', 'id');
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'id', 'attribute_id');
    }
}
