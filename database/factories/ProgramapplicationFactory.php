<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramapplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "program_info_id"=>$this->faker->numberBetween(1,5),
            "user_id"=>$this->faker->numberBetween(1,5),
            
        ];
    }
}
