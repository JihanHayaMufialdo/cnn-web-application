<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'  => 'jihan',
            'password'  => '1234',
            'nama'      => 'Jihan Haya M',
            'role'      => 'admin'
        ]);

        User::create([
            'username'  => 'ilkomfmipa',
            'password'  => '1234',
            'nama'      => 'Didik Kurniawa',
            'role'      => 'dosen'
        ]);

        // User::factory(1)->create();
    }
}
