<?php

namespace App\Http\Controllers;
use App\Tentang;
use App\Jenisanggrek;
use App\Penyakitanggrek;
use App\Subkriteria;
use App\Kriteria;
use App\Alternatif;
use App\Nilaialternatif;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function beranda()
    {
        //
        // $tentangs = Tentang::All();
        return view ('user.blade.beranda'); 
    }
    public function tentang()
    {
        $tentangs = Tentang::All();
        // dd($tentangs);
        return view ('user.blade.tentang', compact('tentangs')); 
    }
    public function jenisanggrek()
    {
        $jenisanggreks = Jenisanggrek::All();
        return view ('user.blade.jenisanggrek', compact('jenisanggreks')); 
    }
    public function penyakitanggrek()
    {
        $penyakitanggreks = Penyakitanggrek::All();
        return view ('user.blade.jenispenyakit', compact('penyakitanggreks')); 
    }
    public function saran()
    {
        // $tentangs = Penyakitanggrek::All();
        return view ('user.blade.saran'); 
    }
    public function cekpenyakit()
    {
        $subkriterias = Kriteria::with('Subkriterias')->get();
        return view ('user.blade.cekpenyakit', compact('subkriterias')); 
    }

    public function perhitunganWP()
    {   
        $dataalternatif = Alternatif::with('Kriterias')->get();

        $Wj = DB::table('kriterias')->select('range')->sum('range');
        $rangekriteria = DB::table('kriterias')->select('*')->get();


        echo "Total WJ : ". $Wj."<br>";
        echo "<hr>";
        echo "Normalisasi Bobot Kriteria <br>";
        $normalisasi = array ();
        foreach ($rangekriteria as $value) {
            # code...
            $idkriteria = $value->id;
            $namakriteria = $value->namakriteria;
            $range = $value->range;
            $bobotkriteriaNew = $range/$Wj;
            echo $namakriteria.": ".$bobotkriteriaNew;
            echo "<br>";
            $normalisasi[] = array('kriteria_id' => $idkriteria, 'namakriteria' => $namakriteria, 'bobot' => $bobotkriteriaNew);
        }

        echo "<hr>";
        // print("<pre>".print_r($normalisai,true)."</pre>");
        echo "<hr>";

        echo "Nilai Alternatif <br><br>";

        // dd($dataalternatif);

        $dataNew = array();
        foreach ($dataalternatif as $key => $item) {
            # code...
            $nama = $item->nama;
            echo "Nama Alternatif: ".$nama;
            echo "<br>";
            foreach ($item->Kriterias as $value) {
                # code...
                $idkriteria = $value->id;
                $nilainya = $value->pivot->bobotnilai;

                        
                foreach ($normalisasi as $key1) {

                    $kriteriaID = $key1['kriteria_id'];
                    if ($idkriteria == $kriteriaID) {
                        echo "Id Kriteria : ".$idkriteria;
                        echo "<br>";
                        echo "bobot alternatif : ".$nilainya;
                        echo "<br>";
                    }
                    else{
                        echo "ID Beda Dong";
                        echo "<br>";
                    }

                }


            }
            echo "<br>";
        }

    }


}
