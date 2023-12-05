<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Database\Factories\MahasiswaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'npm'   => '2117051095',
            'nama'  => 'Jihan Haya Mufialdo'
        ]);

        Mahasiswa::create([
            'npm'   => '2157051001',
            'nama'  => 'Muhammad Ramadhan Kamal'
        ]);

        Mahasiswa::create([
            'npm'   => '2117051004',
            'nama'  => 'Cindy Loria'
        ]);

        Mahasiswa::create([
            'npm'   => '2117051042',
            'nama'  => 'Shafa Auliya'
        ]);
        // Mahasiswa::factory(1)->create();
    }
}
