<?php

function presentPrice($price){

    return money_format('$%i', $price);
}

function getAttribute($id)
{
    $attribute = \App\Models\Attribute::where('id', $id)->first('name');
    if($attribute == null){
        return "color is not selected";
    }
    return $attribute->name;
}

