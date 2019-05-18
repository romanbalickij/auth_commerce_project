<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use App\Models\Product;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

//
//    $now = Carbon::now()->toDateTimeString();
//    $str =  Str::slug('Simple Black Clock');
//    dd([
//
//        Product::create([
//            'name' => 'Simple Black Clock ' ,
//            'slug' => $str ,
//            'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
//            'price' => rand(249999, 449999),
//            'description' => 'Lorem '  . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//            'date' => $now,
//
//        ]),
//
//    ]);


});