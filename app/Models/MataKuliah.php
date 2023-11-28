<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'nama_mk',
        'kode_mk',
        'semester',
        'sks',
        'status'
    ];

    public static function getSemesterValues()
    {
        return ['1', '2', '3', '4', '5', '6', '7', '8'];
    }

    public static function getStatusValues()
    {
        return ['W','P'];
    }
}
