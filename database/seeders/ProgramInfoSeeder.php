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

        ProgramInfo::factory()->create([
            
            "type"=> "Kutyaterápia gyerekeknek",
            "date"=> "2022-06-25",
            "time"=> "10:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutyaterápia gyerekeknek",
            "date"=> "2022-06-25",
            "time"=> "12:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutyaterápia gyerekeknek",
            "date"=> "2022-06-25",
            "time"=> "14:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutyaterápia gyerekeknek",
            "date"=> "2022-06-25",
            "time"=> "16:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutya sétáltatás",
            "date"=> "2022-06-28",
            "time"=> "10:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutya sétáltatás",
            "date"=> "2022-06-28",
            "time"=> "12:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutya sétáltatás",
            "date"=> "2022-06-28",
            "time"=> "14:00"
        ]);
        ProgramInfo::factory()->create([
            
            "type"=> "Kutya sétáltatás",
            "date"=> "2022-06-28",
            "time"=> "16:00"
        ]);
        
      
       
        //ProgramInfo::factory(5)->create();
    }
}
