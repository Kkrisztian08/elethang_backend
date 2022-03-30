<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'admin'=>2,
            'name'=> 'Kovács Krisztián',
            'username'=>'Kkrisz08',
            'email'=> 'krisz@gmail.com',
            'password'=> Hash::make("kiki1234"),
            'birthday'=> '2001.08.30.',
            'address'=> '6550 Kuphal Cliffs Haraland, RI 86869-2052',
            'phone_number'=> '+36303333333',
        ]);
        User::factory()->create([
            'admin'=>1,
            'name'=> 'Nádasdi Barbara',
            'username'=>'Nbarbi11',
            'email'=> 'barbara@gmail.com',
            'password'=> Hash::make("barbi1234"),
            'birthday'=> '2001.11.01.',
            'address'=> '6550 Kuphal Cliffs Haraland, RI 86869-2052',
            'phone_number'=> '+36703333333',
        ]);
        User::factory()->create([
            'admin'=>1,
            'name'=> 'Ambrus Pálma Zita',
            'username'=>'APzitu04',
            'email'=> 'zita@gmail.com',
            'password'=> Hash::make("zita1234"),
            'birthday'=> '1999.04.14',
            'address'=> '6550 Kuphal Cliffs Haraland, RI 86869-2052',
            'phone_number'=> '+362063333333',
        ]);
        User::factory()->create([
            'admin'=>0,
            'name'=> 'Kala Pál',
            'username'=>'Kpal10',
            'email'=> 'embor@embor.com',
            'password'=> Hash::make("kalapal10"),
            'birthday'=> '2002.10.30.',
            'address'=> '1243 Budapest, Kicsi út 45/C',
            'phone_number'=> '+36303333333',
        ]);
        User::factory(10)->create();
    }
}
