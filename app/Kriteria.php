<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
    protected $fillable = [
        'namakriteria', 'atribut', 'range',
    ];
    public function subkriterias(){
        return $this->hasMany('App\Subkriteria');
    }

    public function alternatifs(){
        return $this->belongsToMany('App\Alternatif')->withPivot('bobotnilai');;
    }
    


}
