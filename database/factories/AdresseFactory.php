<?php

namespace Database\Factories;

use App\Models\Adresse;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdresseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adresse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voie' => $this->faker->streetName(),
            'adresse' => $this->faker->address(),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            'code_postal' => $this->faker->postcode(),
            'nom' => $this->faker->streetName(),
            'tele_domicile' => $this->faker->phoneNumber(),
            'tele_portable' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'fax' => $this->faker->faxNumber(),

        ];
    }
}
