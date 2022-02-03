<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $won = rand(1,7);
        return [
            'position' => 0,
            'name' => $this->faker->word(),
            'logo' => $this->faker->word(),
            'played' => '7',
            'won' => $won,
            'lost' => 7-$won,
        ];
    }
}
