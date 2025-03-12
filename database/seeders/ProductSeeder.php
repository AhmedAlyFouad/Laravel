<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Brand;

class ProductSeeder extends Seeder {
    public function run(): void {
        if (Brand::count() == 0) {
            $this->call(BrandSeeder::class);
        }
        Product::factory(200)->create();
    }
}
