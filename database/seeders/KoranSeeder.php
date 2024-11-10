<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Koran;

class KoranSeeder extends Seeder
{
    public function run()
    {
        Koran::create([
            'title' => 'Koran Nasional',
            'publisher' => 'Publisher A',
            'publication_date' => '2024-11-10',
        ]);

        Koran::create([
            'title' => 'Koran Bisnis',
            'publisher' => 'Publisher B',
            'publication_date' => '2024-11-09',
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
