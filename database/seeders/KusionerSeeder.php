<?php

namespace Database\Seeders;

use App\Models\Kusioner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KusionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kusioner::create([
            'nama_kusioner' => 'Kusioner Tingkat Kepuasan Pelayanan PTSP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nulla.',
            'show' => true,
        ]);
    }
}
