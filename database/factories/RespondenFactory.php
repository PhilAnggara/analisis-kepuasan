<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responden>
 */
class RespondenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $order = 1;

    public function definition()
    {
        return [
            'id_kusioner' => 1,
            'nama' => fake()->name(),
            'telp' => '08'. fake()->randomElement([22, 51, 23, 52]) .fake()->randomNumber(9, true),
            'pendidikan' => fake()->randomElement([
                'SD',
                'SMP',
                'SMA',
                'D3',
                'S1',
                'S2',
                'S3'
            ]),
            'alamat' => fake()->randomElement([
                'Tondano Utara',
                'Tondano Barat',
                'Tondano Selatan',
                'Tondano Timur',
                'Langowan Utara',
                'Langowan Barat',
                'Langowan Selatan',
                'Langowan Timur',
                'Tompaso',
                'Sonder',
            ]),
            'pekerjaan' => fake()->randomElement([
                'Dokter',
                'Perawat',
                'PNS',
                'Petani',
                'Polisi',
                'TNI',
                'Wiraswasta',
            ]),
            'no_antrian' => Self::$order++.'A',
            'selesai' => true,
        ];
    }
}
