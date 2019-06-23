<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $attributes = Attribute::all();

        foreach ($attributes as $attribute) {

            if ($attribute->name == 'colour') {
                $attributeValue = \App\Models\AttributeValue::insert([
                    ['value' => 'NavajoWhite', 'attribute_id' => $attribute->id],
                    ['value' => 'SteelBlue', 'attribute_id' => $attribute->id],
                    ['value' => 'Magenta', 'attribute_id' => $attribute->id],
                    ['value' => 'White', 'attribute_id' => $attribute->id],
                ]);

            }
            if ($attribute->name == 'size') {
                $attributeValue = \App\Models\AttributeValue::insert([
                    ['value' => 'XL', 'attribute_id' => $attribute->id],
                    ['value' => 'M', 'attribute_id' => $attribute->id],
                    ['value' => 'ML', 'attribute_id' => $attribute->id],
                    ['value' => 'XXL', 'attribute_id' => $attribute->id],

                ]);
            }

            if ($attribute->name == 'materials') {
                $attributeValue = \App\Models\AttributeValue::insert([
                    ['value' => 'plaque', 'attribute_id' => $attribute->id],
                    ['value' => 'plywood', 'attribute_id' => $attribute->id],
                    ['value' => 'skin', 'attribute_id' => $attribute->id],
                    ['value' => 'leather', 'attribute_id' => $attribute->id],
                ]);
            }
        }
    }
}
