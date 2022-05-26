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
            'user_id' => random_int(1,100),
            'city_id' => random_int(1, 4),
            'category_id' => random_int(1, 12),
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'price' => $this->faker->numberBetween($min = 20, $max = 6000),
            'image' => $this->faker->imageUrl(),
            'star' => $this->faker->boolean()
        ];
    }
}
