<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

class BrandFactory extends Factory
{
    protected $model = Brand::class; // Ensure this is set

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
