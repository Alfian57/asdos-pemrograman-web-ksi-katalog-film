<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gading = User::where('email', 'gading@gmail.com')->first();
        $rafli = User::where('email', 'rafli@gmail.com')->first();

        Film::create([
            'judul' => 'Laskar Pelangi',
            'deskripsi' => 'Ini adalah karya andrea hirata',
            'user_id' => $gading->id,
        ]);

        Film::create([
            'judul' => 'Tanah Surga Katanya',
            'deskripsi' => 'Film buatan indonesia',
            'user_id' => $rafli->id,
        ]);
    }
}
