<?php

namespace Database\Factories;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    protected $model = Jadwal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kelas = Kelas::factory()->create();

        return [
            'id_kelas'  => $kelas->id,
            'hari'      => 'Jumat',
            'jam'       => fake()->time()
        ];
    }
}
