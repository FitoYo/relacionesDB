<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
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
            'categoty_id' => $this->faker->rand(1, 5),
            'user_id' => $this->faker->rand(1, 8), 
        ];
    }
}
