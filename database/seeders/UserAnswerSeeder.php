<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UserAnswer::factory()
            ->count(count: random_int(1, 25))
            ->create();
    }
}
