<?php

namespace Database\Seeders;

use App\Models\Responden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespondenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Responden::factory(30)->create();
        
        ///////////////////
        Responden::create([
            'id_kusioner' => 1,
            'nama' => fake()->name(),
            'telp' => '082298765432',
            'pendidikan' => 'S1',
            'alamat' => 'Langowan Utara',
            'pekerjaan' => 'Dokter',
            'no_antrian' => '31A',
            'selesai' => false,
        ]);
        Responden::create([
            'id_kusioner' => 1,
            'nama' => fake()->name(),
            'telp' => '085112345678',
            'pendidikan' => 'SMA',
            'alamat' => 'Langowan Barat',
            'pekerjaan' => 'Petani',
            'no_antrian' => '32A',
            'selesai' => false,
        ]);
    }
}
