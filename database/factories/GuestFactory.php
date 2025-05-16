<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
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
            'entry_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'contact_phone' => fake()->phoneNumber(),
            'extra_info' => fake()->text(200),
        ];
    }
}
