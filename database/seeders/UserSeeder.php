<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alfian Gading',
            'email' => 'gading@gmail.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'Rafli Maulana',
            'email' => 'rafli@gmail.com',
            'password' => 'password',
        ]);
    }
}
