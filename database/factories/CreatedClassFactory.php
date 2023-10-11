<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreatedClass>
 */
class CreatedClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_year_id' => fake()->numberBetween(1, 3),
            'school_class_id' => fake()->numberBetween(1, 4),
            'course_id' => fake()->numberBetween(1, 12),
            'day_period' => fake()->randomElement(['Manhã', 'Tarde', 'Noite']),
            'room_number' => fake()->numberBetween(1, 24),
            'description' => fake()->unique()->sentence(1),
            'student_limit' => fake()->numerify()
        ];
    }
}
