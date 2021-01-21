<?php

namespace App\Http\Controllers;
use App\Tentang;
use App\Jenisanggrek;
use App\Penyakitanggrek;
use App\Histori;
use App\Subkriteria;
use App\Kriteria;
use App\Alternatif;
use App\Nilaialternatif;
use App\Saran;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

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


        $userbobot = [$request->bobot1, $request->bobot2, $request->bobot3, $request->bobot4, $request->bobot5];
        $userkriteria = [$request->kriteria1, $request->kriteria2, $request->kriteria3, $request->kriteria4, $request->kriteria5];
        
        foreach($userbobot as $index=>$value) {
            if($value === null) unset($userbobot[$index]);
        }

        $data = count($userbobot);

        if ($data < 2) {
            return "Pilih Minimal 2 Gejala!";
        } else {


            // return $request->bobot;
            $dataalternatif = Alternatif::with('Kriterias')->get();
            // return $request->kriteria;
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
            
            // return $normalisasi;
            
            // mencocokan id kriteria dengan bobot
            foreach ($dataalternatif as $key => $item) {
                $nama = $item->nama;
                $id_alternatif = $item->id;
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
                            $kriteriaData [] = array('id' => $id_alternatif, 'nama' => $nama, 'kriteria' => $kriterianama, 'vektor' => $pangkat);
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
            
            
            
            // Menentukan Nilai Vektor S Kriteria
            $totalVektorS = array ();
            foreach ($result as $key3 => $kali) {
                $nilaiawal = 1;
                foreach ($kali as $kalivektor => $valueNew) {
                    $nama = $valueNew['nama'];
                    $id = $valueNew['id'];
                    $nilai = $valueNew['vektor'];
                    $nilaiawal = $nilai * $nilaiawal;
                }
                $totalVektorS [] = array ('id'=>$id, 'nama'=>$nama, 'vektorS'=>$nilaiawal);
            }
            

            $kriteriauser = $userkriteria;
            $bobotusers = [$request->bobot1, $request->bobot2, $request->bobot3, $request->bobot4, $request->bobot5];
            
            // return $kriteriauser[0];
            
            $nilaiusers = array (
                ['kriteria' => $kriteriauser[0], 'bobot' => $bobotusers[0]],
                ['kriteria' => $kriteriauser[1], 'bobot' => $bobotusers[1]],
                ['kriteria' => $kriteriauser[2], 'bobot' => $bobotusers[2]],
                ['kriteria' => $kriteriauser[3], 'bobot' => $bobotusers[3]],
                ['kriteria' => $kriteriauser[4], 'bobot' => $bobotusers[4]]
            );
            // return $nilaiusers;
            // $nilaiusers[] = array('kriteria' => $kriteriauser, 'bobot' => $bobotuser);
            // foreach ($kriteriausers as $key => $kriteriauser) {
                //     # code...
            //     foreach ($bobotusers as $key2 => $bobotuser) {
                //         # code...
                //         if ($key == $key2) {
                    //             # code...
                    //             $nilaiusers[] = array('kriteria' => $kriteriauser, 'bobot' => $bobotuser);
                    //         }
                    //     }
                    // }
                    

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

            
            $totalVektorSUser = array();
            $nilaiawal = 1;
            foreach ($kriteriaDataUser as $valueNewUser) {
                $nilai = $valueNewUser['vektor'];
                $nilaiawal = $nilai * $nilaiawal;
            }
            
            $totalVektorSUser [] = ($nilaiawal);
            // return $totalVektorSUser;
            // return response()->json(array('vektorWP' => $totalVektorS, 'vektorUser' => $totalVektorSUser));
            // return $totalVektorSUser;
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
                $idAlternatif = $valueVektorS['id'];
                $vektorAlternatif = $valueVektorS['vektorS'];
                $vektorVwp = $vektorAlternatif/$vj;
    
                // echo $newAlternatif." = ".$vektorVwp;
                // echo "<br>";
    
                $dataVwp[] = array('id'=>$idAlternatif, 'nama'=>$newAlternatif, 'vektorv'=>$vektorVwp);
            
            }
    
            // return $dataVwp;
    
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
            
            // Simpan data diagnosis 
            
            $namaUser = $request->nama;
            $dataGejala = serialize(array_combine($kriteriauser, $bobotusers));
            
            
            $data = unserialize($dataGejala); 
            // return count($data);
            
            
            $hasilDiagnosis = $dataVwp[0]['nama'];

            // return $hasilDiagnosis;
            
            $histori = new Histori;
            $histori->nama = $namaUser;
            $histori->gejala = $dataGejala;
            $histori->hasil = $hasilDiagnosis;
            
            $histori->save();

            $datahasil = [];

            foreach ($dataVwp as $key => $value) {
                $nama = $value['nama'];
                $ket = getKeterangan($value['id']);
                $sol = getSolusi($value['id']);
                $datahasil[] = [$nama, $ket, $sol];
            }

            
            // $hasilakhir = $dataVwp;

            Storage::disk('public')->put('hasil.json', json_encode($datahasil));


            return $datahasil;
           


            // return view ('user.blade.hasil', compact('totalVektorS','totalVektorSUser','dataVwp','vektorVuser')); 

        }

    }
    

}