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
            'password'  => bcrypt('1234'),
            'nama'      => 'Jihan Haya M',
            'role'      => 'admin'
        ]);

        User::create([
            'username'  => 'kajurilkom',
            'password'  => bcrypt('kajurilkom'),
            'nama'      => 'Didik Kurniawan, S.Si., M.T.',
            'nip'       => '19800419 200501 1 004',
            'role'      => 'dosen'
        ]);

        // User::factory(1)->create();
    }
}
