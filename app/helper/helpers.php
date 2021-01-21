<?php

use App\Alternatif;
use App\Kriteria;
use App\Subkriteria;
// use DB;

function getKeterangan($id) {
    $ket = Alternatif::where('id',$id)->first();
    // return $id;
    return $ket->deskripsi;
}

function getSolusi($id) {
    $solusi = Alternatif::where('id',$id)->first();
    return $solusi->solusi;
}

function getKriteria($id) {
    $kriteria = Kriteria::where('id', $id)->first();
    return $kriteria->namakriteria;
}

function getSubkriteria($kriteria, $bobot) {
    $sub = Subkriteria::where('bobotsub', $bobot)->where('kriteria_id', $kriteria)->first();
    return $sub['namasub'];
}

function getUnserialize($id) {
    $uns = unserialize($id);
    return $uns;
}