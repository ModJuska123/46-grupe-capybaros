<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('lt_LT');

        foreach (range(1, 20) as $i) {

            DB::table('clients')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'akId' => 60204058108,
            ]);
            }


        foreach (range(1, 20) as $i) {

            $ibanexamples = [
                'LT248964485379345165',
                'LT142879432961141565',
                'LT565126552938799933',
                'LT668425521641448712',
                'LT668425521641448712',
                'LT176376155966855249',
            ];

            DB::table('ibans')->insert([
                'iban_No' => $faker->randomElement($ibanexamples),
                'balance' => $faker->numberBetween(0, 20000),
                'client_id' => $faker->numberBetween(1, 18),
            ]);
            }


            DB::table('users')->insert([
                'name' => 'Bebras',
                'email' => 'bebras@gmail.com',
                'password' => Hash::make('123'),
            ]);

    }
}
