<?php

namespace Database\Factories;

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
            'name' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
