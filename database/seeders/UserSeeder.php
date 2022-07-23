<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::query()->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
