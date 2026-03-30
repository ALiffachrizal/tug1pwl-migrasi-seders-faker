<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $loanIds = DB::table('loans')->pluck('id')->toArray();
        $bookIds = DB::table('books')->pluck('id')->toArray();

        foreach ($loanIds as $loanId) {
            // Setiap peminjaman berisi 1 sampai 3 buku
            $jumlahBuku = $faker->numberBetween(1, 3);
            
            for ($j = 0; $j < $jumlahBuku; $j++) {
                DB::table('loan_detail')->insert([
                    'loan_id' => $loanId,
                    'book_id' => $faker->randomElement($bookIds),
                    'is_return' => $faker->boolean(60), // 60% peluang buku sudah dikembalikan
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
