<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sensor;
use App\Pasien;

class laporan extends Model
{

    protected $fillable = [
        'kode_pemeriksaan',
        'tanggal',
        'waktu',
        'avg_fhr',
        'avg_toco'
    ];

    public function sensors(){
        return $this->hasMany(Sensor::class);
    }

    public function user(){
        return $this->belongsTo(Pasien::class);
    }
}
