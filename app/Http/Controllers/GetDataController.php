<?php

namespace App\Http\Controllers;

use App\Alternatif;
use App\Kriteria;
use App\SubKriteria;
use App\Penyakitanggrek;
use App\Tentang;
use App\Jenisanggrek;
use App\Alternatif_kriteria;
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
    public function getNilaAlternatif(Request $request, $nilaialternatif){
        $getnilaialternatif = DB::table('alternatif_kriteria')
            ->join('alternatifs', 'alternatif_kriteria.alternatif_id', '=', 'alternatifs.id')
            ->join('kriterias', 'alternatif_kriteria.kriteria_id', '=', 'kriterias.id')
            ->where('alternatif_kriteria.id', $nilaialternatif)
            ->get();
        // $getnilaialternatif = Alternatif_kriteria::where('id',$nilaialternatif)->first();
        return response()->json($getnilaialternatif);
    }

    public function getTentang(Request $request, $tentang){
        $gettentang = Tentang::where('id',$tentang)->first();
        return response()->json($gettentang);
    }

    public function getJenisAnggrek(Request $request, $jenisanggrek){
        $getjenisanggrek = Jenisanggrek::where('id',$jenisanggrek)->first();
        return response()->json($getjenisanggrek);
    }

    public function getPenyakitAnggrek(Request $request, $penyakitanggrek){
        $getpenyakitanggrek = Penyakitanggrek::where('id',$penyakitanggrek)->first();
        return response()->json($getpenyakitanggrek);
    }

    public function updateNilaiAlternatif(Request $request) {
        DB::table('alternatif_kriteria')->where('id',$request->id)->update([
            'kriteria_id' => $request->kriteria_id,
            'bobotnilai' => $request->bobotnilai,
        ]);
        return redirect()->back();
    }
    
    public function updateTentang(Request $request) {
        
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('tentang'), $filename);
            $gambar = $request->file('image')->getClientOriginalName();
            
        }
        DB::table('tentangs')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $gambar,
        ]);
        return redirect()->back();
    }

    public function updateJenisAnggrek(Request $request) {

        $images = array();
        // $images = array();
        
        if($request->has('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('anggrek'), $filename);
                $images [] = $filename;
            }
            $gambar = implode("|",$images);
            // $anggrek->gambar = $gambar;

        }

        // echo $gambar;
        DB::table('jenisanggreks')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $gambar,
        ]);

        
        return redirect()->back();
    }

    public function updatePenyakitAnggrek(Request $request) {
        $images = array();
        
        if($request->has('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('penyakit'), $filename);
                $images [] = $filename;
            }
            $gambar = implode("|",$images);

        }

        DB::table('penyakitanggreks')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $gambar,
        ]);
        return redirect()->back();
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
