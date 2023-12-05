<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            MahasiswaSeeder::class,
            UserSeeder::class,
            MataKuliahSeeder::class,
            KelasSeeder::class,
            JadwalSeeder::class,
            // KelasMahasiswaSeeder::class,
            // PresensiSeeder::class,
            // PertemuanSeeder::class
        ]);
    }
}
