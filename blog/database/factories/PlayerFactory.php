<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
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
            'name' => $this->faker->name(),
            'nickname' => $this->faker->userName(),
            'photo' => '/images/no-userpic.png',
            'content' => $this->faker->paragraph(),
            'number' => rand(1,99)
        ];
    }
}
