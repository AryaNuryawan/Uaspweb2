<?php

namespace App\Models;

<<<<<<< HEAD
=======
use App\Models\KategoriMontir;
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
<<<<<<< HEAD
    //
=======
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

>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440
}
