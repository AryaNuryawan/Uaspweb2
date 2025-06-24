<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    protected $fillable = ['pekerjaan', 'biaya', 'layanan_id', 'pj_montir_id'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function pjMontir()
    {
        return $this->belongsTo(Montir::class, 'pj_montir_id');
    }
}



