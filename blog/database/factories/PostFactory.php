<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,20),
            'category_id'=>rand(1,4),
            'title' => $this->faker->sentence(),
            'image' => null,
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'views' => rand(1,10000),
            'published_at' => date('Y-m-d H:i:s', rand(strtotime('-1 week'), strtotime('now')))
        ];
    }
}
