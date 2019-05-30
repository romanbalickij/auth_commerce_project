<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected  $table = 'attribute_values';
    public $timestamps = false;

    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }
}
