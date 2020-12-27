<?php

use App\Alternatif;
use App\Kriteria;
use App\Subkriteria;
// use DB;

function getKeterangan($id) {
    $ket = Alternatif::where('id',$id)->first();
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

function getSubkriteria($id) {
    $sub = Subkriteria::where('id', $id)->first();
    return $sub['namasub'];
}

function getUnserialize($id) {
    $uns = unserialize($id);
    return $uns;
}