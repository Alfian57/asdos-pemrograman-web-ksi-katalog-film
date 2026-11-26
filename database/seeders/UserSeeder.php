<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Gading",
            'email' => "gading@gmail.com",
            'password' => 'password'
        ]);

        User::create([
            'name' => "Rafli",
            'email' => "rafli@gmail.com",
            'password' => 'password'
        ]);

        User::create([
            'name' => "Sendy",
            'email' => "sendy@gmail.com",
            'password' => 'password'
        ]);
    }
}
