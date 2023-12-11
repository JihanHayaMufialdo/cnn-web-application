<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'id_kelas',
        'hari',
        'mulai',
        'selesai',
        'ruangan',
        'jenis'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public static function getHariValues(){
        return ['Senin','Selasa','Rabu','Kamis','Jumat'];
    }

    public static function getJenisValues(){
        return ['T','P'];
    }

    public static function getRuanganValues(){
        return ['GIK L1A','GIK L1B','GIK L1C','GIK L2','MIPA T L1A','MIPA T L1B',
                'LAB RPL','LAB R1','LAB R2','LAB R3','LAB R4'];
    }


}
