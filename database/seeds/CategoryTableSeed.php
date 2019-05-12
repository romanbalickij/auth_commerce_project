<?php

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Accessories', 'slug' => 'Accessories1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Homelife', 'slug' => 'Homelife1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kids & Baby', 'slug' => 'Kids & Baby1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Stationery', 'slug' => 'Stationery1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Health & Beauty', 'slug' => 'Health & Beauty1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Home Appliances', 'slug' => 'Home Appliances1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Clothing', 'slug' => 'Clothing1', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
