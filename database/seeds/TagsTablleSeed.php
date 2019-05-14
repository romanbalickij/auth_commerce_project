<?php

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagsTablleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    Appliances
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Tag::insert([
            ['title' => 'Kids',  'slug' => 'Kids', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Beauty','slug' => 'Beauty', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'chair', 'slug' =>'Chair', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Home',  'slug' => 'Home', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Appliances',  'slug' => ' Appliances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
