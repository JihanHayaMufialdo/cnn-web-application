<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama',
        'id_matkul',
        'id_dosen',
        'kuota'
    ];

    public function dosen(){
        return $this->belongsTo(User::class, 'id_dosen', 'id');
    }

    // public function mahasiswa(){
    //     return $this->belongsToMany(Mahasiswa::class, 'kelas_mahasiswa', 'id_kelas', 'id_')
    // }
}
