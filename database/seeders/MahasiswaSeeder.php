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
        Mahasiswa::factory(1)->create();
    }
}