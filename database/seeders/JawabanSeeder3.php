<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Responden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawabanSeeder3 extends Seeder
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
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 21,
            'id_pertanyaan' => 10,
            'harapan' => 3,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 1,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 2,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 22,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 3,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 1,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 3,
            'harapan' => 2,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 6,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 23,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 1,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 6,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 24,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 1,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 2,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 25,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 6,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 26,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 3,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 27,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 28,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 3,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 4,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 8,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 29,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);

        /////////////////////////
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 1,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 2,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 3,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 4,
            'harapan' => 3,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 5,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 6,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 7,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 8,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 9,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
        Jawaban::create([
            'id_responden' => $lastId + 30,
            'id_pertanyaan' => 10,
            'harapan' => 4,
            'persepsi' => 4,
        ]);
    }
}
