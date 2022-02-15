<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
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
            "gender"=>$this->faker->randomElement(['boy', 'girl']),
            "likely_bday"=>$this->faker->date(),
            "species"=>$this->faker->word(1,true),
            "external_property"=>$this->faker->sentence(2, true),
            "description"=>$this->faker->sentence(),
            "interest"=>$this->faker->numberBetween(1,10),
            "adoption_id"=>$this->faker->numberBetween(1,5),
        ];
    }
}
