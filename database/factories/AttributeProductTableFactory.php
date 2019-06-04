<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Attribute::class, function (Faker $faker) {


    $attributeMaterials = ['colour', 'size', 'materials'];
    $products = Product::inRandomOrder()->get('id')->first();

   return  [
      $attribute =  Attribute::create( [
            'name'       => $faker->randomElement($attributeMaterials),
            'product_id' =>$faker->numberBetween(40,44)   //Product::all()->pluck('id')->random()
        ]),

    ];
});
