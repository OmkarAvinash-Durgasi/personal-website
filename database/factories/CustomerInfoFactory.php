<?php

namespace Database\Factories;

use App\Models\CustomerInfo;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CustomerInfoFactory extends Factory
{
    protected $model=CustomerInfo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerNumber' => fake()->randomNumber(),
            'customerName' => fake()->name(),
            'customerLastName' => fake()->lastName(),
            'customerFirstName' => fake()->firstName(),
            'phone' => fake()->unique()->phoneNumber(),
            'addressLine1' => fake()->unique()->address(),
            'addressLine2' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state'=>fake()->name(),
            'country' => fake()->country(),
            'postalCode' => fake()->postcode(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
//    public function unverified(): static
//    {
//        return $this->state(fn (array $attributes) => [
//            'email_verified_at' => null,
//        ]);
//    }
}
