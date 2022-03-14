<?php

namespace Database\Seeders;

use App\Models\Adoption;
use Illuminate\Database\Seeder;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adoption::factory(10)->create();
    }
}
