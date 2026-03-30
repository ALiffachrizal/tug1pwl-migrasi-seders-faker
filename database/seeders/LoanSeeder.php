<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $usersNPM = DB::table('users')->pluck('npm')->toArray();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('loans')->insert([
                'user_npm' => $faker->randomElement($usersNPM),
                'loan_at' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'return_at' => $faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
