<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderSeeder extends Seeder {
    public function run(): void {
        if (User::count() == 0) {
            $this->call(UserSeeder::class);
        }
        if (Product::count() == 0) {
            $this->call(ProductSeeder::class);
        }
        Order::factory(200)->create();
    }
}
