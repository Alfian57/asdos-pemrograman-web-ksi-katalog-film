<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'judul' => 'Laskar Pelangi',
            'deskripsi' => 'Ini adalah karya andrea hirata',
        ]);

        Film::create([
            'judul' => 'Tanah Surga Katanya',
            'deskripsi' => 'Film buatan indonesia',
        ]);
    }
}
