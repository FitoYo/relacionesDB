<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaggableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_id' => $this->faker->numberBetween(1, 12),
            'taggable_type' => $this->faker->randomElement(['posts', 'videos']),
            'taggable_id' => $this->faker->numberBetween(1, 40),

        ];
    }
}
