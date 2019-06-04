<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected  $table = 'attribute_values';
    protected  $fillable = ['attribute_id', 'value'];
    public $timestamps = false;

    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }

    public static function getProductAttribute($attributesVariants)
    {
        $productAttribute = [];
        foreach ($attributesVariants as $attributeVariant)
        {
            foreach ($attributeVariant->attribute()->get() as $attribute){
                $productAttribute[]
                    = [
                    'attributeId'    => $attribute->id,
                    'attributeName'  => $attribute->name,
                    'attributeValue' => $attributeVariant->value
                ];
            }
        }
        return $productAttribute;
    }

    public  static  function findAttributesValues($attributesValuesId)
    {
        return self::findOrFail($attributesValuesId);
    }

}
