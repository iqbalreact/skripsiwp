<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    //
    protected $fillable = [
        'kriteria_id', 'nama', 'nilai',
    ];
}