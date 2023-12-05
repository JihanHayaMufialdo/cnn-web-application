<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'kelas_mahasiswa';

    protected $fillable = [
        'id_kelas',
        'id_mahasiswa'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'id');
    }

    public static function getMahasiswaValues(){
        $mahasiswaValues = Mahasiswa::pluck('nama', 'id');
        return $mahasiswaValues;
    }
}
