<?php

namespace Database\Seeders;

use App\Models\VirtualAdoption;
use Illuminate\Database\Seeder;

class VirtualAdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VirtualAdoption::factory(5)->create();
    }
}
