<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $tags = Tag::inRandomOrder()->get('id')->first();
            $product->tags()->attach($tags->id);
            $attributes = Attribute::all();
            foreach ($attributes as $attribute) {
                DB::table('product_attributes')->insert([
                    'product_id' => $product->id,
                    'attribute_id' => $attribute->id
                ]);
            }

            $values = \App\Models\AttributeValue::all();
            foreach ($values as $value) {
                DB::table('product_variant')->insert([
                    'product_id' => $product->id,
                    'attribute_value_id' => $value->id
                ]);
            }
        }
    }




}
