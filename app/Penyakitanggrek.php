<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakitanggrek extends Model
{
    //
    protected $fillable = [
        'nama', 'keterangan', 'gambar',
    ];

}
