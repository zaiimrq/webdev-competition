<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAnswer>
 */
class UserAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quiz_id' => \App\Models\Quiz::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'question_id' => \App\Models\Question::all()->random()->id,
            'answer_id' => \App\Models\Answer::all()->random()->id,
            'is_correct' => $this->faker->boolean(),
            'score' => $this->faker->numberBetween(0, 100),
        ];
    }
}
