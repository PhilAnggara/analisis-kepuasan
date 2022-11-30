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
            'role' => 'Super Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Geovany Pitoy',
            'email' => 'admin1@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Serwin Rumagit',
            'email' => 'admin2@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Glen Lengkong',
            'email' => 'admin3@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
