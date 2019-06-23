<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    protected $fillable = ['name', 'product_id'];

    public $timestamps = false;

    public function products(){
        return $this->belongsToMany(Product::class,'product_attributes',
            'attribute_id',
            'product_id')->withPivot('name');
    }

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }


}
