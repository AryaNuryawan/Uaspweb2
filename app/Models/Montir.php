<?php

namespace App\Models;

use App\Models\KategoriMontir;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    protected $fillable = [
        'nomor',
        'nama',
        'gender',
        'tgl_lahir',
        'tmp_lahir',
        'keahlian',
        'kategori_montir_id',

    ];
    public function kategoriMontir()
    {
        return $this->belongsTo(KategoriMontir::class);
    }

}
