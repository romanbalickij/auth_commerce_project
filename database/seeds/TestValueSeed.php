<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TestValueSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = Product::all();
        foreach ($products as $product)
        {
            $tags           = Tag::inRandomOrder()->get('id')->first();
            $attribute      = Attribute::inRandomOrder()->get('id')->first();
            $attributeValue = AttributeValue::inRandomOrder()->get('id')->first();
            $product->tags()->attach($tags->id);
            $product->attributes()->attach($attribute->id);
            $product->values()->attach($attributeValue->id);
        }
    }
}
