<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif_kriteria extends Model
{
    //
    protected $table = 'alternatif_kriteria';
    protected $fillable = [
        'alternatif_id', 'kriteria_id', 'bobotnilai',
    ];
    

}
