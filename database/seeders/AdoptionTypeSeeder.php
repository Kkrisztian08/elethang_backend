<?php

namespace Database\Seeders;

use App\Models\AdoptionType;
use Illuminate\Database\Seeder;

class AdoptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdoptionType::factory()->create([
            'type'=> 'adoption'
        ]);
        AdoptionType::factory()->create([
            'type'=> 'virtual_adoption'
        ]);
    }
}
