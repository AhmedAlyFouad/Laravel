<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {
    public function run() {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word(),
                'price' => $faker->randomFloat(2, 10, 500),
                'description' => $faker->sentence(),
                'image_path' => $faker->imageUrl(200, 200, 'products'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
