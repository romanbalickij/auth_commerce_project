<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Attribute;
use App\Models\AttributeValue;
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

$factory->define(AttributeValue::class, function (Faker $faker) {

    $attributeSize =  ['XL','M', 'ML','XXL'];
    $attributeMaterials = ['plaque','plywood','skin', 'artificial leather'];
    $attributes = Attribute::all();


    for ($i = 0; $i <=30; $i++) {

        foreach ($attributes as $attribute) {
            if ($attribute->name == 'colour') {
                $attributeValue = \App\Models\AttributeValue::create([
                    'value' => $faker->colorName,
                    'attribute_id' => $attribute->id
                ]);

            } elseif ($attribute->name == 'size') {
                $attributeValue = \App\Models\AttributeValue::create([
                    'value' => $faker->randomElement($attributeSize),
                    'attribute_id' => $attribute->id
                ]);
            } elseif ($attribute->name == 'materials') {
                $attributeValue = \App\Models\AttributeValue::create([
                    'value' => $faker->randomElement($attributeMaterials),
                    'attribute_id' => $attribute->id
                ]);
            }
        }
    }

});
