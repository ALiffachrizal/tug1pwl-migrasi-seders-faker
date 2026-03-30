<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            ['code' => 'RAK-01', 'name' => 'Rak Referensi Utama'],
            ['code' => 'RAK-02', 'name' => 'Rak Modul Praktikum'],
            ['code' => 'RAK-03', 'name' => 'Rak Jurnal Skripsi'],
        ]);
    }
}
