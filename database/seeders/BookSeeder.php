<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 15; $i++) {
            DB::table('books')->insert([
                // Perbaikan ada di baris ini: mengganti catchPhrase dengan sentence
                'title' => $faker->sentence(3), 
                'author' => $faker->name,
                'year' => $faker->year,
                'publisher' => $faker->company,
                'city' => $faker->city,
                'cover' => 'default_cover.png',
                'category_id' => $faker->numberBetween(1, 5), 
                'bookshelf_id' => $faker->numberBetween(1, 3), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}