<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;                             //reikia pasiusinti

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $faker = Faker::create('lt_LT');                //reikia feikerio, kad rodytu LT vardus
        
        foreach (range(1, 20) as $i) {                   //sitas rasomas kad pakartotu mech irasyma 20 kartu

            DB::table('mechanics')->insert([             //cia paimta is teorijos ir ipeistinta
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
            ]);                                          //teorija iki cia

        }

        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);

    }
}
