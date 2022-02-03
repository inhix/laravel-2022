<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocialIconFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class' => $this->faker->word(),
            'link' => $this->faker->word(),
            'logo_class' => $this->faker->word(),
        ];
    }
}
