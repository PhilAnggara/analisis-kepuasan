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
            'deskripsi' => 'Kusioner Tingkat Kepuasan Pelayanan PTSP untuk masyarakat yang akan/telah menggunakan layanan PTSP',
            'show' => true,
        ]);
    }
}
