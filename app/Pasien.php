<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\laporan;

class Pasien extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $fillable = [
        'nama_pasien',
        'email',
        'password',
        'alamat_pasien',
        'umur_pasien',
        'total_pemeriksaan'
    ];

    public function laporans(){
        return $this->hasMany(laporan::class);
    }
}
