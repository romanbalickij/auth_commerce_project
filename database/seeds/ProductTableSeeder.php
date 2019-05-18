<?php

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
       // factory(Product::class,4)->create();
//
//        $now = Carbon::now()->toDateTimeString();
//        $str =  Str::slug('Simple Black Cfdflofdfckee');
//        // Laptops
//        for ($i=1; $i <= 10; $i++) {
//           dd( Product::create([
//
//                'name' => 'Simple Black Clockew '.$i,
//                'slug' => $str.$i,
//                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
//                'price' => rand(149999, 249999),
//                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//            ])->categories()->attach(3));
//        }
//        // Make Laptop 1 a Desktop as well. Just to test multiple categories
//        $product = Product::find(1);
//        $product->categories()->attach(1);
//        // Desktops
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Simple Black Clock ' . $i,
//                'slug' => $str . $i,
//                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
//                'price' => rand(249999, 449999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//
//            ])->categories()->attach(2);;
//        }
//        // Phones
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Wood Simple Chair V2 ' . $i,
//                'slug' => $str . $i,
//                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
//                'price' => rand(79999, 149999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//            ])->categories()->attach(3);
//        }
//        // Tablets
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Wood Simple Chair V2 ' . $i,
//                'slug' => $str . $i,
//                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
//                'price' => rand(49999, 149999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//
//            ])->categories()->attach(3);;
//        }
//        // TVs
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Unero Round Sunglass ' . $i,
//                'slug' => $str . $i,
//                'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
//                'price' => rand(79999, 149999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//
//            ])->categories()->attach(4);;
//        }
//        // Cameras
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Unero Round Sunglass ' . $i,
//                'slug' => $str . $i,
//                'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
//                'price' => rand(79999, 249999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//            ]);
//        }
//        // Appliances
//        for ($i = 1; $i <= 9; $i++) {
//            Product::create([
//                'name' => 'Appliance ' . $i,
//                'slug' => $str . $i,
//                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
//                'price' => rand(79999, 149999),
//                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'date' => $now,
//            ])->categories()->attach(5);;
//        }
//        // Select random entries to be featured
//        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    }

}

factory(Product::class,2)->create();