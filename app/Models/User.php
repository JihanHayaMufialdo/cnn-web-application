<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'nip',
        'role'
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    public function kelas(){
        return $this->hasMany(Kelas::class, 'id_dosen', 'id');
    }

    public static function getRoleValues(){
        return ['dosen'];
    }
}
