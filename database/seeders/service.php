<?php
namespace Database\Seeders;
use  App\Models\service as s;

use Database\Factories\serviceFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       s::factory(10)->create();
    }
}
