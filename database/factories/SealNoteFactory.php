<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SealNote>
 */
class SealNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'month_id'      => fake()->numberBetween(1, 12),
            'quarter_id'    => fake()->numberBetween(1, 4),
            'status'        => fake()->randomElement([0, 1])
        ];
    }
}
