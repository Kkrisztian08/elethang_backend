<?php

namespace Database\Seeders;

use App\Models\ProgramHourAndDay;
use Illuminate\Database\Seeder;

class ProgramHourAndDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramHourAndDay::factory(5)->create();
    }
}
