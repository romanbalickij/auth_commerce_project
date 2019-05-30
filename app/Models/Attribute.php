<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany(Product::class,'product_variants');
    }

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

}
