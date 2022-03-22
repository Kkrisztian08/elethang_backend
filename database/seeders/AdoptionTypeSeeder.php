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
            'type'=> 'ált. örökbefogadás'
        ]);
        AdoptionType::factory()->create([
            'type'=> 'virtuális örökbefogadás'
        ]);
    }
}
