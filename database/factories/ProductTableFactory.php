<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $now        = Carbon::now()->toDateTimeString();
    $categoryId = Category::inRandomOrder()->get('id')->first();
    $tagId      = Tag::inRandomOrder()->get('id')->first();
    $products   = Product::inRandomOrder()->get('id')->first();

     return [
      $product  =  Product::create([
            'name'    =>$faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
            'slug'    => $faker->unique()->slug ,
            'details' => $faker->text($maxNbChars = 40),
            'price'   => rand(249, 3000),
            'image'   => '2.png',
            'description' => $faker->text($maxNbChars = 200),
            'quantity'=> rand(1, 10),
        //    'date'    => $now,
            'views'   => rand(1, 20)

        ])->categories()->attach($categoryId),
         $products->tags()->attach($tagId->id),
    ];
});