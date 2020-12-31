<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histori;

class HistoriAdminController extends Controller
{
    //
    public function index()
    {
        # code...

        $historis = Histori::paginate(10);
        // return $historis;

        $d = array();
        foreach ($historis as $value) {
            $gejalas = unserialize($value->gejala);
            $d[]= ['id'=> $value->id, 'nama'=> $value->nama, 'gejala' => $gejalas, 'hasil' => $value->hasil];
        }
        
        
        return view ('admin.histori',compact('d','historis'));
    }

}
