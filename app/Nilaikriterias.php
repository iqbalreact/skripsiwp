<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilaikriterias extends Model
{   
    protected $fillable = [
        'alternatif_id', 'kriteria_id', 'nilai',
    ];
    //
}
