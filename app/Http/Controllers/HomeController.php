<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\Subkriteria;
use App\Kriteria;
use App\Alternatif_kriteria;
use App\Jenisanggrek;
use App\Penyakitanggrek;
use App\Saran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $alternatifCount = count(Alternatif::All());
        $kriteriaCount = count(Kriteria::All());
        $subkriteriaCount = count(Subkriteria::All());
        $nilaikriteriaCount = count(Alternatif_kriteria::All());
        // echo $nilaikriteriaCount;    
        $jenisCount = count(Jenisanggrek::All());
        $penyakitCount = count(Penyakitanggrek::All());
        $saranCount = count(Saran::All());

        return view('admin.dashboard', compact('alternatifCount','kriteriaCount','subkriteriaCount','nilaikriteriaCount','jenisCount','penyakitCount','saranCount'));
    }
}
