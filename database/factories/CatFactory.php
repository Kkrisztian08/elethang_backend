<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "gender"=>$this->faker->randomElement(['Hím', 'Nőstény']),
            "likely_bday"=>$this->faker->date(),
            "external_property"=>$this->faker->sentence(2, true),
            "description"=>$this->faker->sentence(),
            "interest"=>$this->faker->numberBetween(1,10),
            "adoption_id"=>$this->faker->numberBetween(1,5),
            
        ];
    }
}
