<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Responden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lastId = Responden::all()->last()->id - 32;

        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 4,
            'harapan' => 2,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 1,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 4,
            'harapan' => 2,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 2,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 4,
            'harapan' => 2,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 3,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 4,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 3,
            'harapan' => 2,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 5,
            'id_pertanyaan' => 10,
            'harapan' => 3,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 6,
            'id_pertanyaan' => 10,
            'harapan' => 3,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 7,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 8,
            'id_pertanyaan' => 10,
            'harapan' => 3,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 5,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 9,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 10,
            'id_pertanyaan' => 10,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
    }
}
