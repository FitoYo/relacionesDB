<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupUserFactory extends Factory
{
  
    public function definition()
    {
        return [

            'group_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
