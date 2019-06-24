<?php

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now        = Carbon::now()->toDateTimeString();
        // Simple Black Clock
        for ($i=1; $i <= 10; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Simple Black Clock'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 24999),
                'image'    => 'h12-product-60-505x625.jpg',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 9000),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

            ])->categories()->attach($categoryId );
        }
        //Brone Lamp Glasses
        for ($i = 1; $i <= 10; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Brone Lamp Glasses'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 24999),
                'image'    => 'h5-product-34-505x625.jpg',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 9000),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

            ])->categories()->attach($categoryId );;
        }
        // Simple Fabric Chair
        for ($i = 1; $i <= 10; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Wood Simple Chair V2'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 2499),
                'image'    => 'h5-product-28-505x625.jpg',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 900),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

            ])->categories()->attach($categoryId );
        }
        // Tablets
        for ($i = 1; $i <= 9; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Simple Fabric Chair '.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 2499),
                'image'    => 'h1-product-4-505x625.jpg',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 900),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',


            ])->categories()->attach($categoryId );;
        }
        // TVs
        for ($i = 1; $i <= 9; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Wood Complex Lamp Box'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 2499),
                'image'    => '13.png',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 900),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',


            ])->categories()->attach($categoryId );
        }
        // Cameras
        for ($i = 1; $i <= 9; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'BO&Play Wireless Speaker'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 2499),
                'image'    => 'h1-product-2-505x625.jpg',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 900),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

            ]);
        }
        // Appliances
        for ($i = 1; $i <= 9; $i++) {
            $categoryId = Category::inRandomOrder()->get('id')->first();
            Product::create([
                'name'     =>  $name = 'Liquid Unero Ginger Lily'.$i ,
                'slug'     => Str::slug($name) . $i,
                'featured' => true,
                'details'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua.',
                'price'    => rand(10, 2499),
                'image'    => '14.png',
                'quantity' => rand(1, 10),
                'views'    => rand(100, 900),
                'date'     => $now,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

            ])->categories()->attach($categoryId );;
        }


        /**this is good factory*/
        //  factory(Product::class,3)->create();
    }

}

