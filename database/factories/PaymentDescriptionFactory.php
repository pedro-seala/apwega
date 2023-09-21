<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentDescription>
 */
class PaymentDescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description'   => fake()->sentence(2),
            'entity'        => fake()->randomElement([0, 1]),
            'status'        => fake()->randomElement([0, 1])
        ];
    }
}
