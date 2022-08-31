<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cd>
 */
class cdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'departement' => fake()->randomElement(['serssi','sbdps','sdmpcr','sdos','sdai','sqnvt'])
            //
        ];
    }
}
