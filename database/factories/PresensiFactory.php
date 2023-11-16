<?php

namespace Database\Factories;

use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Presensi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presensi>
 */
class PresensiFactory extends Factory
{
    protected $model = Presensi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jadwal = Jadwal::factory()->create();
        $mahasiswa = Mahasiswa::factory()->create();

        return [
            'id_jadwal'     => $jadwal->id,
            'id_mahasiswa'  => $mahasiswa->id,
            'keterangan'    => 'Hadir'
        ];
    }
}
