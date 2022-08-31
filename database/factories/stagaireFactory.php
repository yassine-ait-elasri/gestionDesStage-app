<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class stagaireFactory  extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

        'nom' => fake()->name(),
        'prenom' => fake()->name() ,
        'CIN' => fake()->name() ,
        'addresse' => fake()->name() ,
        'gmail' =>  fake()->email(),
        'tel' => '858888888888' ,
        'etablissement' => '123',
       
        ];
    }
}
