<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    //
    protected $table = 'histori';
    protected $fillable = [
        'id', 'nama', 'gejala', 'hasil',
    ];

    public $timestamps = false;
}
