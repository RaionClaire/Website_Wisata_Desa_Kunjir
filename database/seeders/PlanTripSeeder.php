<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlanTrip;
use App\Models\User;

class PlanTripSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create([
            'name' => 'Admin Trip',
            'email' => 'admin@example.com',
        ]);

        PlanTrip::factory()->count(10)->create([
            'user_id' => $user->id,
        ]);
    }
}
