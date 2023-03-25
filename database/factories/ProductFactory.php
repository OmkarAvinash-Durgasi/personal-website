<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productCode' => fake()->randomNumber(),
            'productName' => fake()->name(),
            'productLine' => fake()->name(),
            'productScale' => fake()->name(),
            'productVendor' => fake()->name(),
            'productDescription' => fake()->sentence(),
            'quantityInStock' => fake()->numberBetween(0, 15000),
            'buyPrice' => fake()->numberBetween(0, 15000),
            'MSRP' => fake()->numberBetween(0, 15000),
        ];
    }
}
