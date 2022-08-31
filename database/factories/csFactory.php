<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cs>
 */
class csFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'service' => fake()->randomElement(['serssi','sbdps','sdmpcr','sdos','sdai','sqnvt'])
            //
            //

        ];
    }
}
