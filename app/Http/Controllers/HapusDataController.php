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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use DB;

class HapusDataController extends Controller
{
    //
    public function hapusJenis(Request $jenis)
    {
        $data = Jenisanggrek::findOrFail($jenis);
        // dd($data[0]->gambar);
        $directory = 'anggrek/'.$data[0]->gambar;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();
    }

    public function hapusPenyakit(Request $jenis)
    {
        $data = Penyakitanggrek::findOrFail($jenis);
        // dd($data[0]->gambar);
        $directory = 'anggrek/'.$data[0]->gambar;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();
    }

    public function hapusTentang(Request $jenis)
    {
        $data = Tentang::findOrFail($jenis);
        // dd($data[0]->gambar);
        $directory = 'anggrek/'.$data[0]->gambar;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();
    }
    
    public function hapusnilai(Request $jenis)
    {
        $nilai = Alternatif_kriteria::find($jenis);
        $nilai->each->delete();
        return redirect('admin/nilaialternatif')->with('error', 'Berhasil Dihapus');
    }

    public function hapussub(Request $jenis)
    {
        $nilai = Subkriteria::find($jenis);
        $nilai->each->delete();
        return redirect('admin/subkriteria')->with('error', 'Berhasil Dihapus');
    }

    public function hapuskriteria(Request $jenis)
    {
        $nilai = Kriteria::find($jenis);
        $nilai->each->delete();
        return redirect('admin/kriteria')->with('error', 'Berhasil Dihapus');
    }

    public function hapusalternatif(Request $jenis)
    {
        $nilai = Alternatif::find($jenis);
        $nilai->each->delete();
        return redirect('admin/alternatif')->with('error', 'Berhasil Dihapus');
    }
}
