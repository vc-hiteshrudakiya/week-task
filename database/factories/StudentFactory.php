<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Student;
use App\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'course_id' => Course::factory(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'marks' => fake()->numberBetween(40, 100),
        ];
    }
}
