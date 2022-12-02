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
            'name' => 'Handry Pitoy',
            'email' => 'handrypitoy@yahoo.com',
            'role' => 'Super Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Dolie Tangian',
            'email' => 'dolietangian@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Jeity Karisoh',
            'email' => 'jeitykarisoh01@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
