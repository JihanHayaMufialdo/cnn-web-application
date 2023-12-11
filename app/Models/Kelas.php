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
        'periode',
        'kurikulum',
        'kuota'
    ];

    public function dosen(){
        return $this->belongsTo(User::class, 'id_dosen', 'id');
    }

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'id_matkul', 'id');
    }

    public function kelasmahasiswa(){
        return $this->hasMany(KelasMahasiswa::class, 'id_kelas', 'id');
    }

    public function pertemuan(){
        return $this-> hasMany(Pertemuan::class, 'id_kelas', 'id');
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'id_kelas','id');
    }

    public static function getPeriodeValues(){
        return ['2023 Ganjil','2023 Genap'];
    }

    public static function getKurikulumValues(){
        return ['2020'];
    }
}
