<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReturnSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        $returnedDetails = DB::table('loan_detail')->where('is_return', 1)->pluck('id')->toArray();

        foreach ($returnedDetails as $detailId) {
            $kenaDenda = $faker->boolean(20); 
            
            DB::table('returns')->insert([
                'loan_detail_id' => $detailId,
                'charge' => $kenaDenda,
                'amount' => $kenaDenda ? $faker->numberBetween(10, 50) * 1000 : 0, 
            ]);
        }
    }
}
