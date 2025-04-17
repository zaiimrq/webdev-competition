<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quiz::factory()
            ->count(5)
            ->create();
    }
}
