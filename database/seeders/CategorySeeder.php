<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['category' => 'Analisis dan Perancangan Sistem Informasi'],
            ['category' => 'Kecerdasan Buatan'],
            ['category' => 'Pemrograman Web'],
            ['category' => 'Sistem Basis Data'],
            ['category' => 'Jaringan Komputer'],
        ];

        DB::table('categories')->insert($categories);
    }
}