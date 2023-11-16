<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\MataKuliah;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    protected $model = Kelas::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $matkul = MataKuliah::factory()->create();
        $dosen = User::factory()->create();

        return [
            'nama'      => fake()->name(),
            'id_matkul' => $matkul->id,
            'id_dosen'  => $dosen->id,
            'kuota'     => fake()->randomNumber(2),
        ];
    }
}
