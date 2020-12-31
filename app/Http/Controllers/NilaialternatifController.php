<?php

namespace App\Http\Controllers;
use App\Alternatif;
use App\Subkriteria;
use App\Kriteria;
use App\Alternatif_kriteria;
use DB;
use Illuminate\Http\Request;

class NilaialternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alternatifs = Alternatif::all();
        $subkriterias = Kriteria::with('Subkriterias')->get();
        $nilaialternatifs = DB::table('alternatif_kriteria')
            ->join('alternatifs', 'alternatif_kriteria.alternatif_id', '=', 'alternatifs.id')
            ->join('kriterias', 'alternatif_kriteria.kriteria_id', '=', 'kriterias.id')
            ->select('alternatif_kriteria.*', 'alternatifs.nama', 'kriterias.namakriteria')
            ->orderBy('alternatifs.nama')
            ->get();

        return view ('admin.nilaialternatif', compact('subkriterias', 'alternatifs','nilaialternatifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $nilaialternatif = new Alternatif_kriteria;
        $nilaialternatif->alternatif_id = $request->alternatif_id;
        $nilaialternatif->kriteria_id = $request->kriteria_id;
        $nilaialternatif->bobotnilai = $request->bobotnilai;

        $nilaialternatif->save();
        return redirect()->back()->with('success', 'Berhasil menambahkan nilai alternatif');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif_kriteria $nilaialternatif)
    {
        //
        $nilaialternatif->delete();
        return redirect('admin/nilaialternatif');
    }
}
