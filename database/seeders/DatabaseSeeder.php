<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BookSeeder::class,
            CdSeeder::class,
            KoranSeeder::class,
            SkripsiSeeder::class,
            JurnalSeeder::class,
        ]);
    }
}
