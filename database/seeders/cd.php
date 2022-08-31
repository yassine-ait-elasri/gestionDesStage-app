<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Database\Factories\cdFactory;
use \App\Models\cd as chefd;
class cd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        chefd::factory(10)->create();
        //
    }
}
