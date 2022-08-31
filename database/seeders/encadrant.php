<?php

namespace Database\Seeders;
use Database\Factories\encadrantFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class encadrant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        \App\Models\encadrant::factory(10)->create();
    }
}
