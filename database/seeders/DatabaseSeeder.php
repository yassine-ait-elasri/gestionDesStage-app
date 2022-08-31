<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Database\Factories\encadrantFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\User::factory(10)->create();
         /*
          \App\Models\encadrant::factory()->create(

            [
            'nom' => fake()->name(),
            'prenom' => fake()->name() ,
            'service' => fake()->randomElement(['ERS','BPS','DP','DO','DI','QNV'])
            
            ]

         );
*/
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
