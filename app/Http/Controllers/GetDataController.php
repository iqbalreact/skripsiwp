<?php

namespace App\Http\Controllers;

use App\Alternatif;
use App\Kriteria;
use App\SubKriteria;
use Illuminate\Http\Request;
use DB;

class GetDataController extends Controller
{
    //
    public function getAlternatif(Request $request, $alternatif){
        $getalternatif = Alternatif::where('id',$alternatif)->first();
        return response()->json($getalternatif);
    }
    public function getKriteria(Request $request, $kriteria){
        $getkriteria = Kriteria::where('id',$kriteria)->first();
        return response()->json($getkriteria);
    }
    public function getSubKriteria(Request $request, $subkriteria){
        $getsubkriteria = Subkriteria::where('id',$subkriteria)->first();
        return response()->json($getsubkriteria);
    }

    public function updateAlternatif(Request $request) {
        $alternatif = Alternatif::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }

    public function updatenilai(Request $request) {
        $nilai = Nilaialternatif::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }

    public function updateKriteria(Request $request) {
        $kriteria = Kriteria::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }
    public function updateSubKriteria(Request $request) {
        $subkriteria = Subkriteria::where('id', $request->id)->first()->update($request->all());
        return redirect()->back();
    }
    public function getSubBobot($subkriteria){
        $getsubbobot = Subkriteria::where('kriteria_id', $subkriteria)->get();
        return response()->json($getsubbobot);
    }


}
