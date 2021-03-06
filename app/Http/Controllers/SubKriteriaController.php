<?php

namespace App\Http\Controllers;

use App\Subkriteria;
use App\Kriteria;
use Illuminate\Http\Request;
use DB;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subkriterias = Subkriteria::all();
        $kriterias = Kriteria::all();
        $subkriterias = DB::table('subkriterias')
            ->join('kriterias', 'subkriterias.kriteria_id', '=', 'kriterias.id')
            ->select('subkriterias.*', 'kriterias.namakriteria')
            ->orderBy('kriterias.namakriteria')
            ->get();
        // dd($subkriteria);
        return view ('admin.subkriteria', compact('subkriterias', 'kriterias'));
        //
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
        $validasi = $request->validate([
            'kriteria_id' => 'required',
            'namasub'=> 'required',
            'bobotsub'=> 'required',
        ]);
        $subkriteria = Subkriteria::create($validasi);    
        return redirect('admin/subkriteria')->with('success', 'Berhasil menambahkan data kriteria');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkriteria  $subkriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Subkriteria $subkriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkriteria  $subkriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkriteria $subkriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkriteria  $subkriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkriteria $subkriteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkriteria  $subkriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkriteria $subkriterium)
    {   
        $subkriterium->delete();
        return redirect('admin/subkriteria');
        //
    }
}
