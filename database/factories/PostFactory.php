<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 100),
            'city_id' => random_int(1, 4),
            'category_id' => random_int(1, 20),
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'date' => $this->faker->dateTimeBetween('-2 week', '+2 week'),
            'price' => $this->faker->numberBetween(60, 200),
            'image' => $this->faker->imageUrl(),
            'star' => $this->faker->boolean()
        ];
    }
}
