<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(CategoryTableSeed::class);
          $this->call(ProductTableSeeder::class);
          $this->call(TagsTablleSeed::class);
          $this->call(AttributeProductTableSeed::class);
          $this->call(AttributeValuesTableSeed::class);
          $this->call(CouponTableSeed::class);

    }
}
