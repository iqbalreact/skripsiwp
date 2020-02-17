<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    //
    protected $fillable = [
        'kriteria_id', 'namasub', 'bobotsub',
    ];

    public function kriterias(){
        return $this->belongTo('App\Kriteria');
    }

}
