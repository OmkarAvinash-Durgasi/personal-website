<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $officeCodes = DB::table('offices')->pluck('id');
        dd( fake()->randomElement(['Vice PRo','Sales','Representativ','Peon']));
        //dd(fake()->numberBetween(1000, 1900));
        return [
            'employeeNumber' => fake()->numberBetween(1000, 1900),
            'lastName' => fake()->lastName(),
            'firstName' => fake()->firstName(),
            'extension' => 'x' . fake()->randomNumber(),
            'email' => fake()->unique()->safeEmail(),
            'officeCode' => fake()->randomElement($officeCodes),
            'reportsTo' => fake()->numberBetween(1000, 1900),
            'jobTitle' => fake()->randomElement(['Vice PRo','Sales']),

        ];
    }
}

