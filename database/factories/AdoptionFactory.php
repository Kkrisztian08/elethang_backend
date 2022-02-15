<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "adoption_type_id"=>$this->faker->numberBetween(1,2),
            "user_id"=>$this->faker->numberBetween(1,5),
            "adoption_beginning"=>$this->faker->date(),
            
        ];
    }
}
