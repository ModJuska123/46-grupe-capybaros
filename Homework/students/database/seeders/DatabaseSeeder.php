<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('lt_LT');

        foreach (range(1, 5) as $i) 
        {
        DB::table('students')->insert([                
            'name' => $faker->firstName,                            
            'surname' => $faker->lastName,
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([                
            'name' => 'Briedis',                            
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
    }
}
