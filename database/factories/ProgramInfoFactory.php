<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "type"=>$this->faker->randomElement(['kutya sétáltatás', 'kutya fésűlés']),
            "date"=>$this->faker->date(),
            "time"=>$this->faker->time("H:i"),
        ];
    }
}
