<?php

namespace App\Http\Controllers;
use App\Tentang;
use App\Jenisanggrek;
use App\Penyakitanggrek;
use App\Subkriteria;
use App\Kriteria;
use App\Alternatif;
use App\Nilaialternatif;
use App\Saran;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

    public function addsaran(Request $request)
    {
        // dd($request);
        $saran = new Saran;
        $saran->nama = $request->nama;
        $saran->email = $request->email;
        $saran->saran = $request->saran;
        $saran->save();
        
        return redirect('/');
    }

    public function cekpenyakit()
    {
        $subkriterias = Kriteria::with('Subkriterias')->get();
        return view ('user.blade.cekpenyakit', compact('subkriterias')); 
    }

    public function perhitunganWP(Request $request)
    {   
        $dataalternatif = Alternatif::with('Kriterias')->get();

        $Wj = DB::table('kriterias')->select('range')->sum('range');
        $rangekriteria = DB::table('kriterias')->select('*')->get();
        
        $kriteriaData = array();
        
        // Normalisasi Bobot Kriteria
        $normalisasi = array ();
        foreach ($rangekriteria as $value) {
            # code...
            $idkriteria = $value->id;
            $namakriteria = $value->namakriteria;
            $range = $value->range;
            $bobotkriteriaNew = $range/$Wj;
            $normalisasi[] = array('kriteria_id' => $idkriteria, 'namakriteria' => $namakriteria, 'bobot' => $bobotkriteriaNew);
        }
        // End Normalisasi Bobot

        // mencocokan id kriteria dengan bobot
        foreach ($dataalternatif as $key => $item) {
            $nama = $item->nama;
            $datakriteria = $item->Kriterias;
            foreach ($datakriteria as $key => $value) {
                $idkriteria = $value->id;
                $namakriteria = $value->namakriteria;
                $pivot = $value->pivot->bobotnilai;
                foreach ($normalisasi as $key => $nilai) {
                    $kriteriaid = $nilai['kriteria_id'];
                    $kriterianama = $nilai['namakriteria'];
                    $bobot = $nilai['bobot'];
                    if($kriteriaid == $idkriteria){
                        $pangkat = pow($pivot, $bobot);
                        $kriteriaData [] = array('nama' => $nama, 'kriteria' => $kriterianama, 'vektor' => $pangkat);
                    }   
                }                
            }
        }
        // end
        
        // Grup Kriteria data
        $result = array();
        foreach ($kriteriaData as $element) {
            $result[$element['nama']][] = $element;
        }
        // end grup 

        // Menentukan Nilai Vektor S Kriteria
        $totalVektorS = array ();
        foreach ($result as $key3 => $kali) {
            $nilaiawal = 1;
            foreach ($kali as $kalivektor => $valueNew) {
                $nama = $valueNew['nama'];
                $nilai = $valueNew['vektor'];
                $nilaiawal = $nilai * $nilaiawal;
            }
            $totalVektorS [] = array ('nama'=>$nama, 'vektorS'=>$nilaiawal);
        }
        // End Menentukan Nilai Vektor S
    

        //Data User 
        // return response()->json($request);

        $kriteriausers = $request->kriteria;
        $bobotusers = $request->bobot;

        $inputanuser = array('Id Kriteria' => $kriteriausers, 'Bobot Kriteria' => $bobotusers);

        $nilaiusers = array ();
        foreach ($kriteriausers as $key => $kriteriauser) {
            # code...
            foreach ($bobotusers as $key2 => $bobotuser) {
                # code...
                if ($key == $key2) {
                    # code...
                    $nilaiusers[] = array('kriteria' => $kriteriauser, 'bobot' => $bobotuser);
                }
            }
        }

        $kriteriaDataUser = array ();
        foreach ($nilaiusers as $key => $valueuser) {
            # code...

            $kriteria = $valueuser['kriteria'];
            $bobotkriteriauser = $valueuser['bobot'];
            
            foreach ($normalisasi as $key => $nilai2) {
                $kriteriaid = $nilai2['kriteria_id'];
                $kriterianama = $nilai2['namakriteria'];
                $bobot = $nilai2['bobot'];

                if($kriteriaid == $kriteria){

                    $pangkatuser = pow($bobotkriteriauser, $bobot);
                    $kriteriaDataUser [] = array('nama' => $kriteria, 'kriteria' => $kriterianama, 'vektor' => $pangkatuser);
                }   
            }       
        }
        // print_r($kriteriaDataUser);

        // return response()->json($kriteriaDataUser);

            $totalVektorSUser = array();
            $nilaiawal = 1;
            foreach ($kriteriaDataUser as $valueNewUser) {
                $nilai = $valueNewUser['vektor'];
                $nilaiawal = $nilai * $nilaiawal;
            }
            $totalVektorSUser [] = ($nilaiawal);
       
        // return response()->json(array('vektorWP' => $totalVektorS, 'vektorUser' => $totalVektorSUser));
        
        $sumvektorSwp = 0;
        $vektorUser = $totalVektorSUser[0];
        
        foreach($totalVektorS as $num => $values) {
            $sumvektorSwp += $values[ 'vektorS' ];
        }

        // Menentukan Nilai VektorStotal
        $vj = $sumvektorSwp+$vektorUser;
        $Stotal = array($vj);
        // end Nilai VektorStotal

        $dataVwp = array ();
        // Menentukan nilai VektosS/VJ ==> Data Alternatif
        foreach ($totalVektorS as $key => $valueVektorS) {
            # code...
            $newAlternatif = $valueVektorS['nama'];
            $vektorAlternatif = $valueVektorS['vektorS'];

            $vektorVwp = $vektorAlternatif/$vj;

            // echo $newAlternatif." = ".$vektorVwp;
            // echo "<br>";

            $dataVwp[] = array('nama'=>$newAlternatif, 'vektorv'=>$vektorVwp);

        }

        // Menentukan nilai VektorS/Vj ==> Data User
        $vektorVusers = $vektorUser/$vj;
        // end

        //Mencari Nilai Vektor V terdekat dengan Vektor V user 
        foreach ($dataVwp as $key => $cariV) {
            $Vwp = $cariV['vektorv'];
            $namaVwp = $cariV['nama'];
            $hasil = $vektorVusers - $Vwp;
            $urutan1 = abs($hasil);
            $dataVwp[$key]['selisih']=$urutan1;
        }
        // end

        $vektorVuser = array($vektorVusers);
        

        usort($dataVwp, function ($a, $b) {
            return $a['selisih'] <=> $b['selisih'];
        });
        return view ('user.blade.hasil', compact('totalVektorS','totalVektorSUser','dataVwp','vektorVuser')); 
    }
    

}