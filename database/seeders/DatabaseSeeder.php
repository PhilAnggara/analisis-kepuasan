<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            KusionerSeeder::class,
            PertanyaanSeeder::class,
            RespondenSeeder::class,
            JawabanSeeder::class,
            JawabanSeeder2::class,
            JawabanSeeder3::class,
        ]);
    }
}
