<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Database\Seeders\PermissionsTableSeeder; //sekantys 3 nauji is permisionu
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\ConnectRelationshipsSeeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();                                       //roles.... 

            $this->call(PermissionsTableSeeder::class);
            $this->call(RolesTableSeeder::class);
            $this->call(ConnectRelationshipsSeeder::class);
            //$this->call('UsersTableSeeder');

        Model::reguard();                                       //...roles
        
        $faker = Faker::create('lt_LT');

        foreach (range(1, 5) as $i) 
        {
        DB::table('students')->insert([                
            'name' => $faker->firstName,                            
            'surname' => $faker->lastName,
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('123'),
        ]);

        
    }
    }
}
