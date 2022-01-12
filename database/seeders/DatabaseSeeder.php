<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //

        \App\Models\Group::factory(3)->create();

        \App\Models\User::factory()->create(['name' => 'Oro']);
        \App\Models\User::factory()->create(['name' => 'Plata']);
        \App\Models\User::factory()->create(['name' => 'Bronce']);


        \App\Models\User::factory()->create(['name' => 'Bronce']);




    }
}
