<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
protected $fillable = ['kode', 'nama', 'deskripsi', 'total_biaya', 'rating'];
}

