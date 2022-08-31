<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class serviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_service'=>fake()->randomElement(['serssi','sbdps','sdmpcr']),
            'departement'=> 'dieps' //fake()->randomElement(['BDO','CGM','CS', 'CD'])
/*
            'id_service'=>fake()->randomElement(['sdos','sdai','sqnvt']),
            'departement'=> 'dieps' //fake()->randomElement(['BDO','CGM','CS', 'CD'])

*/

            //
        ];
    }
}
