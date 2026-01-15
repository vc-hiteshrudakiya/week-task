<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => fake()->name(),
             'department' => fake()->randomElement([
                 'HR', 'IT', 'Finance', 'Marketing'
            ]),
        'status' => fake()->randomElement(['active', 'inactive']),
        'salary' => fake()->numberBetween(20000, 80000),
        ];
    }
}
