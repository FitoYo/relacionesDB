<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Group::factory(3)->create();

        \App\Models\Level::factory()->create(['name' => 'Oro']);
        \App\Models\Level::factory()->create(['name' => 'Plata']);
        \App\Models\Level::factory()->create(['name' => 'Bronce']);

        \App\Models\Category::factory(5)->create();

        \App\Models\Tag::factory(12)->create();

        \App\Models\User::factory(8)->create();

        \App\Models\Profile::factory(8)->create();

        \App\Models\Location::factory(8)->create();

        \App\Models\Comment::factory(38)->create();


        \App\Models\Post::factory(40)->create();

        \App\Models\Video::factory(40)->create();

        \App\Models\Image::factory(88)->create();

        \App\Models\Taggable::factory(80)->create();

        \App\Models\GroupUser::factory(12)->create();




    }
}
