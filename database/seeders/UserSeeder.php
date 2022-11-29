<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Evangelion Merentek',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        // User::create([
        //     'name' => 'Nama Pengguna',
        //     'email' => 'pengguna@gmail.com',
        //     'password' => Hash::make('Pengguna123')
        // ]);
    }
}
