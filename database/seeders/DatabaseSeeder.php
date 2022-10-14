<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'DuyND',
            'email' => 'test@test.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'name'=> 'Duy',
        //     'description' => 'Develop'
        // ]);
        // Listing::create([
        //     'name'=> 'T',
        //     'description' => 'Develop'
        // ]);

        // Listing::factory(6)->create([
        //     'user_id'=> $user->id
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
