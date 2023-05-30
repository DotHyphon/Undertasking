<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->realText(40),
            'description' => $this->faker->realText(200),
            'subtasks' => json_encode(['subtask 1' => $this->faker->word, 'subtask 2' => $this->faker->word, 'subtask 3'  => $this->faker->word]),
            'due_date' => $this->faker->dateTimeBetween('-1 day', '+4 day'),
            'completed' => $this->faker->boolean(10),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
