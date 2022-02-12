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
            "selected_date"=>$this->faker->date(),
            "program_hour_and_day_id"=>$this->faker->numberBetween(1,5),
            "user_id"=>$this->faker->numberBetween(1,5),
            "program_type_id"=>$this->faker->numberBetween(1,5),
            
        ];
    }
}
