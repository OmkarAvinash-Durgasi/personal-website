<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    protected $model=Office::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'officeCode' => fake()->randomNumber(),
            'city' => fake()->city(),
            'phone' => fake()->phoneNumber(),
            'addressLine1' => fake()->address(),
            'addressLine2' => fake()->streetAddress(),
            'state' => fake()->name(),
            'postalCode' => fake()->postcode(),
            'country' => fake()->country(),
            'territory'=>fake()->name(),

        ];
    }
}
