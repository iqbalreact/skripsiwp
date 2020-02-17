<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tentangs = Tentang::All();
        return view ('admin.tentang', compact('tentangs')); 
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
        $anggrek = new Tentang;
        $anggrek->nama = $request->nama;
        $anggrek->keterangan = $request->keterangan;
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            // dd($image);
            $image->move(public_path('tentang'), $filename);
            $anggrek->gambar = $request->file('image')->getClientOriginalName();
        }

        $anggrek->save();
        return redirect()->back()->with('success', 'Berhasil menambahkan Tentang Aplikasi');;
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
    public function destroy(Tentang $tentang)
    {
        //
        $data = Tentang::findOrFail($tentang);
        // dd($data[0]->gambar);
        $directory = 'tentang/'.$data[0]->gambar;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();
    }
}
