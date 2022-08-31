<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Database\Factories\stagaireFactory;
use \App\Models\stagaire as d;
class stagaire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        d::factory(10)->create();
    }
}
