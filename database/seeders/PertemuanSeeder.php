<?php

namespace Database\Seeders;

use App\Models\Pertemuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertemuan::create([
            'pertemuan' => 1,
            'id_jadwal' => 1,
            'mulai'     => '09:20',
            'selesai'   => '10:00',
            'materi'    => 'looping'
        ]);
    }
}
