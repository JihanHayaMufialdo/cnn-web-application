<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama'      => 'AB',
            'id_matkul' => '1',
            'id_dosen'  => '9ab60e4f-2e6b-4451-93c8-a5a28e804a81',
            'periode'   => '2023 Ganjil',
            'kurikulum' => '2020',
            'kuota'     => '50'
        ]);
        // Kelas::factory(1)->create();
    }
}
