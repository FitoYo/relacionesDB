<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['users', 'posts', 'videos']);

        if($type == 'users'){
                        $id =  $this->faker->numberBetween(1, 8);
                    }else{
                        $id = $this->faker->numberBetween(1, 40);}


        return [
            'url' => $this->faker->imageUrl(1024, 1024),

            'imageable_type' => $type,
    
            'imageable_id' => $id,

        ];
    }
}
