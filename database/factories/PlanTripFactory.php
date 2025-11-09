<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PlanTripFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'title' => $this->faker->sentence(3),
            'excerpt' => $this->faker->sentence(8),
            'image' => 'plan-trips/kunjir_pantai_1.webp',
            'description' => $this->faker->paragraph(4),
        ];
    }
}
