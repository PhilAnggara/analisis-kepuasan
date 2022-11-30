<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas tidak membeda-bedakan dalam memberikan pelayanan',
            'persepsi' => 'Layanan yang diberikan tidak mempersulit masyarakat',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas melayani berdasarkan SOP',
            'persepsi' => 'Layanan diberikan sesuai dengan ketentuan SOP dan aturan layanan',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Pelayanan sesuai dengan waktu yang ditentukan',
            'persepsi' => 'Bagaimana pendapat anda tentang waktu dalam menyelesaikan layanan?',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas menjelaskan mengenai standar pelayanan',
            'persepsi' => 'Bagaimana tingkat kompetensi dari petugas yang memberikan pelayanan PTSP',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas pelayanan selalu berada di tempat',
            'persepsi' => 'Bagaimana tingkat kepuasan anda terhadap layanan yang telah diberikan',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas memberikan pelayanan sesuai wewenangnya',
            'persepsi' => 'Layanan PTSP (Pelayanan Terpadu Satu Pintu) telah dilaksanakan dengan …',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas bersikap baik, rapi dan menjelaskan dengan sungguh-sungguh',
            'persepsi' => 'Layanan yang diberikan sangat membantu masyarakat',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Ruangan tertata rapi, bersih dan tidak pengap',
            'persepsi' => 'Apakah anda merasa puas dengan sarana-prasarana yang diberikan selama anda memperoleh layanan?',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas memberikan bukti pembayaran dan tidak melakukan pungli',
            'persepsi' => 'Biaya layanan sesuai dengan ketentuan yang diberikan',
        ]);
        Pertanyaan::create([
            'id_kusioner' => 1,
            'harapan' => 'Petugas tidak memberikan pelayanan dengan bertele-tele',
            'persepsi' => 'Apakah produk hasil layanan dapat memenuhi standar anda',
        ]);
    }
}
