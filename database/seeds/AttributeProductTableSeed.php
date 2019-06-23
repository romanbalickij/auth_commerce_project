<?php

use App\Models\Attribute;
use Illuminate\Database\Seeder;


class AttributeProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Attribute::insert([
            ['name' => 'colour'],
            ['name' => 'size'],
            ['name' => 'materials'],
        ]);
    }

}
