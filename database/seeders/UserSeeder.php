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
            'name'=> 'SuperAdmin',
            'email'=> 'elethang@gmail.com',
            'password'=> Hash::make("superadmin2022"),
            'birthday'=> '2022.03.20',
            'address'=> 'Élethang utca 10',
            'phone_number'=> '+36308579522',
        ]);
        User::factory()->create([
            'admin'=>1,
            'name'=> 'Kovács Krisztián',
            'email'=> 'k.krisztian0830@gmail.com',
            'password'=> Hash::make("kiki1234"),
            'birthday'=> '2001.08.30.',
            'address'=> '1213 Budapest, Fenyves út 45/C',
            'phone_number'=> '+36308579522',
        ]);
        User::factory()->create([
            'admin'=>1,
            'name'=> 'Nádasdi Barbara',
            'email'=> 'nadasdibarbara15@gmail.com',
            'password'=> Hash::make("barbi1234"),
            'birthday'=> '2001.11.01.',
            'address'=> '6550 Kuphal Cliffs Haraland, RI 86869-2052',
            'phone_number'=> '+36703957846',
        ]);
        User::factory()->create([
            'admin'=>1,
            'name'=> 'Ambrus Pálma Zita',
            'email'=> 'ambrus.zita99@gmail.com',
            'password'=> Hash::make("zita1234"),
            'birthday'=> '1999.04.14',
            'address'=> '6550 Kuphal Cliffs Haraland, RI 86869-2052',
            'phone_number'=> '+36206268673',
        ]);
        User::factory()->create([
            'admin'=>0,
            'name'=> 'Embör',
            'email'=> 'embor@embor.com',
            'password'=> Hash::make("1234"),
            'birthday'=> '2002.10.30.',
            'address'=> '1243 Budapest, Kicsi út 45/C',
            'phone_number'=> '+36308579542',
        ]);
    }
}
