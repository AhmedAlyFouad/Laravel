<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; // Import this
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'price' => 1200.99,
                'description' => 'A high-performance laptop for professionals.',
                'image_path' => 'storage/products/laptop.jpg',
            ],
            [
                'name' => 'Smartphone',
                'price' => 699.99,
                'description' => 'A powerful smartphone with an amazing camera.',
                'image_path' => 'storage/products/phone.jpg',
            ],
        ]);
    }
}
