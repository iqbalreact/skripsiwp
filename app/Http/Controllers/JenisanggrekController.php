<?php

namespace App\Http\Controllers;

use App\Jenisanggrek;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class JenisanggrekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenisanggreks = Jenisanggrek::All();
        return view ('admin.jenisanggrek', compact('jenisanggreks'));

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
        $anggrek = new Jenisanggrek;
        $anggrek->nama = $request->nama;
        $anggrek->keterangan = $request->keterangan;
        // $anggrek = $request->file('gambar');
        // $tujuan_upload = 'upload/anggrek';
        // $anggrek->move($tujuan_upload,$anggrek->getClientOriginalName());
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            // dd($image);
            $image->move(public_path('anggrek'), $filename);
            $anggrek->gambar = $request->file('image')->getClientOriginalName();
        }

        $anggrek->save();
        return redirect()->back();

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
    public function destroy(Jenisanggrek $jenisanggrek)
    {
        //
        $data = Jenisanggrek::findOrFail($jenisanggrek);
        // dd($data[0]->gambar);
        $directory = 'anggrek/'.$data[0]->gambar;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();
    }
}
