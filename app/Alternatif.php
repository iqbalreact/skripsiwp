<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    //
    protected $fillable = [
        'nama', 'deskripsi', 'solusi',
    ];

    public function kriterias(){
        return $this->belongsToMany('App\Kriteria')->withPivot('bobotnilai');
    }

}
