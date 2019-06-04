<?php

function presentPrice($price){

    return money_format('$%i', $price);
}

function  jsonDecode($productAttribute)
{
    return json_decode($productAttribute);
}
