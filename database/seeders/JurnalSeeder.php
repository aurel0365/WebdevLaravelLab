<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurnal;

class JurnalSeeder extends Seeder
{
    public function run()
    {
        Jurnal::create([
            'title' => 'Penelitian Teknologi 2024',
            'author' => 'Budi C',
            'publication_date' => '2024-10-30',
        ]);

        Jurnal::create([
            'title' => 'Tren Pengembangan Aplikasi',
            'author' => 'Anita D',
            'publication_date' => '2024-10-25',
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
