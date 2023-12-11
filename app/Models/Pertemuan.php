<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;

    protected $table = 'pertemuan';

    protected $fillable = [
        'pertemuan',
        'id_kelas',
        'tanggal',
        'mulai',
        'selesai',
        'materi',
        'ruangan',
        'jenis',
        'status'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public static function getStatusValues(){
        return ['Selesai','Belum'];
    }
}
