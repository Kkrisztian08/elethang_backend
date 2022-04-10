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
        
        $this->call(UserSeeder::class);
        $this->call(AdoptionTypeSeeder::class);
        $this->call(AdoptionSeeder::class);
        $this->call(ProgramInfoSeeder::class);
        $this->call(ProgramapplicationSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CatSeeder::class);     
        $this->call(DogSeeder::class);  
        $this->call(PostimageSeeder::class);
       
        
        
        
    }
}
