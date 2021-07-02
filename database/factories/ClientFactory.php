<?php

namespace Database\Factories;

use App\Models\Client;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {



        return [
            'nom' => $this->faker->name(),
            'prénom' => $this->faker->lastName,
            'sexe' => $this->faker->randomElement(['male', 'female']),
            'situation_familiale' => $this->faker->randomElement(['célibataire', 'marié']),
            'nom_prenom_pere' => $this->faker->name(),
            'nom_prenom_mere' => $this->faker->firstNameFemale(),
            'date_naissance' => $this->dateTimeBetween('1960-01-01', '2002-12-31')->format('d/m/Y'),
            'lieu_naissance' => $this->faker->state(),
            'autres_natio' => $this->faker->country(),
            'vip' => $this->faker->randomElement(['1', '0']),
            'statut' => $this->faker->randomElement(['1', '0']),
            'nature' => $this->faker->randomElement(['1', '0']),
            'capacite_juridique' => $this->faker->randomElement(['mineur', 'majeur']),



        ];
    }
}
