<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cd;

class CdSeeder extends Seeder
{
    public function run()
    {
        Cd::create([
            'title' => 'Greatest Hits',
            'artist' => 'Artist A',
            'release_year' => 2019,
        ]);

        Cd::create([
            'title' => 'Jazz Classics',
            'artist' => 'Artist B',
            'release_year' => 2018,
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
