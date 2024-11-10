<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skripsi;

class SkripsiSeeder extends Seeder
{
    public function run()
    {
        Skripsi::create([
            'title' => 'Analisis Data Besar',
            'author' => 'Mikael A',
            'advisor' => 'Dr. John',
            'year' => 2024,
        ]);

        Skripsi::create([
            'title' => 'Pemrograman Web Lanjut',
            'author' => 'Maria B',
            'advisor' => 'Dr. Sarah',
            'year' => 2023,
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
