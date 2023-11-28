<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::create([
            'nama_mk' => 'Dasar-Dasar Pemrograman',
            'kode_mk' => 'COM12345',
            'semester' => '1',
            'sks' => 3,
            'status' => 'W'
        ]);

        // MataKuliah::factory(1)->create();
    }
}
