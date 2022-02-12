<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdoptionSeeder::class);
        $this->call(VirtualAdoptionSeeder::class);  
        $this->call(ProgramTypeSeeder::class);
        $this->call(ProgramHourAndDaySeeder::class);
        $this->call(ProgramapplicationSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CatSeeder::class);     
        $this->call(DogSeeder::class);
        
        
        
    }
}
