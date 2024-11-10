<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Belajar Laravel',
            'author' => 'John Doe',
            'year' => 2021,
        ]);

        Book::create([
            'title' => 'Mastering PHP',
            'author' => 'Jane Smith',
            'year' => 2020,
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
