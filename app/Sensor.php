<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\laporan;

class Sensor extends Model
{
    protected $fillable = [
        'id_laporan',
        'fhr',
        'toco'
    ];

    public function user(){
        return $this->belongsTo(laporan::class);
    }
}
