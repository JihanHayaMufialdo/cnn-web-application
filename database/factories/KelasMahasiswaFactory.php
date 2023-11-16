<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KelasMahasiswa>
 */
class KelasMahasiswaFactory extends Factory
{
    protected $model = KelasMahasiswa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $kelas = Kelas::factory()->create();
        $mahasiswa = Mahasiswa::factory()->create();

        return [
            'id_kelas'      => $kelas->id,
            'id_mahasiswa'  => $mahasiswa->id
        ];
    }
}
