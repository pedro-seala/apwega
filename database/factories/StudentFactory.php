<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'processNb' => fake()->unique()->numerify(),
            'name' => fake()->name(),
            'gender' => fake()->randomElement([0, 1]),
            'father' => fake()->name('male'),
            'mother' => fake()->name('femele'),
            'birthDate' => fake()->date(),
            'identityCard' => fake()->unique()->numerify(),
            'icIssueDate' => fake()->date(),
            'county_id' => fake()->numberBetween(1, 32),
            'address' => fake()->streetName(),
            'phone' => fake()->phoneNumber(),
            'alternative_phone' => fake()->phoneNumber()
        ];
    }
}
