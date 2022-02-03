<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,4),
            'score' => rand(1,4) . '-' . rand(1,4),
            'opponent_name' => $this->faker->word(),
            'opponent_logo' => $this->faker->word(),
            'tournament' => $this->faker->word(),
            'start_time' => $this->faker->dateTimeBetween('-1 year', '+1 year')
        ];
    }
}
