<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolPlan>
 */
class SchoolPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id'             => fake()->numberBetween(1, 12),
            'school_class_id'       => fake()->numberBetween(1, 4),
            'subject_category_id'   => fake()->numberBetween(1, 7),
            'subject_id'            => fake()->numberBetween(1, 12),
            'time'                  => fake()->numberBetween(3, 6)
        ];
    }
}
