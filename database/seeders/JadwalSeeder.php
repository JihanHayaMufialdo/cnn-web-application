<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'id_kelas'  => 1,
            'hari'      => 'Senin',
            'mulai'     => '09:20',
            'selesai'   => '11:00',
            'ruangan'   => 'GIK L1C',
            'jenis'     => 'T'
        ]);
    }
}
