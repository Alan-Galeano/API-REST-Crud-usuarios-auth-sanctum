<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'user' => 'alangalea',
            'name' => 'Alan Galeano',
            'email' => 'alangalea@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'user' => 'joagalea',
            'name' => 'Joaquin Galeano',
            'email' => 'joagalea@gmail.com',
            'password' => Hash::make('holamundo'),
        ]);
    }
}
