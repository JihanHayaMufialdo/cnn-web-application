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
}