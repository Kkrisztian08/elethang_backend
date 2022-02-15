<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "event_name"=>$this->faker->name(),
            "description"=>$this->faker->sentence(),
            "date"=>$this->faker->date(),
            
        ];
    }
}
