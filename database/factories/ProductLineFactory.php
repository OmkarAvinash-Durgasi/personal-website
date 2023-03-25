<?php

namespace Database\Factories;

use App\Models\ProductLine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductLine>
 */
class ProductLineFactory extends Factory
{
    protected $model = ProductLine::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productLine' => fake()->name(),
            'textDescription' => fake()->sentence(),
            'htmlDescription' => fake()->name(),
            'image' => fake()->text(),
        ];
    }
}
