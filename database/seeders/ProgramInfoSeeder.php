<?php

namespace Database\Seeders;

use App\Models\ProgramInfo;
use Illuminate\Database\Seeder;

class ProgramInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramInfo::factory(5)->create();
    }
}
