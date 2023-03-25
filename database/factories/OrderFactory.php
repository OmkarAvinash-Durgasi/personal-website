<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderNumber' => fake()->randomNumber(),
            'orderDate' => fake()->date(),
            'requiredDate' => fake()->date(),
            'shippedDate' => fake()->date(),
            'status' => fake()->name(),
            'comments' => fake()->text(),
            'customerNumber' => fake()->randomNumber(),
        ];
    }
}
