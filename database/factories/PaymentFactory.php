<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerNumber' => fake()->numberBetween(1000, 1900),
            'checkNumber' => fake()->randomLetter(),
            'paymentDate' => fake()->date(),
            'amount' => fake()->numberBetween(0, 100000),
        ];
    }
}
