<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 8),
            'instagram' => $this->faker->userName(),
            'github' => $this->faker->userName(),
            'web' => $this->faker->url(),

        ];
    }
}
