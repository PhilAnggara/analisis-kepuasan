<?php

namespace Database\Seeders;

use App\Models\Responden;
use Carbon\Carbon;
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
        for ($i=0; $i < 11; $i++) {
            $rand = rand(10, 30);
            for ($j=0; $j < $rand; $j++) { 
                Responden::create([
                    'id_kusioner' => 0,
                    'nama' => fake()->name(),
                    'telp' =>  '-',
                    'pendidikan' =>  '-',
                    'alamat' =>  '-',
                    'pekerjaan' =>  '-',
                    'no_antrian' => '-',
                    'selesai' => true,
                    'created_at' => Carbon::now()->subMonths(11 - $i),
                ]);
            }
        }

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
