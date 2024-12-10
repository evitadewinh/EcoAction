<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@admin.com',
            'name'  => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'email' => 'user@user.com',
            'name'  => 'user',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);
    }
}
