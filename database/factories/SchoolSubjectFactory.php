<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolSubject>
 */
class SchoolSubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => fake()->colorName(),
            'abbreviation'  => fake()->domainWord(),
            'status'        => fake()->randomElement([0, 1])
        ];
    }
}
