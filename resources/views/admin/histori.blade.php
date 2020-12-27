@extends('layout/master')

@section('title')
    <title>Histori - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Histori</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('saran') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Hisori</h5>
    </div>

    {{-- <div class="panel-body">
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah saran</button>
    </div> --}}

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 20%">Nama</th>
                <th>Gejala</th>
                <th>Hasil</th>
                <th class="text-center" style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($d as $item)
            {{-- {{dd($item)}} --}}
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item['nama']}}</td>
                <td>
                    @foreach ($item['gejala'] as $k => $t)
                        {{ getKriteria($k). ' : ' .getSubkriteria($t) }}
                        <br>
                    @endforeach
                </td>
                <td>{{$item['hasil']}}</td>
                <td class="text-center">
                    <div class="btn-group">
                        {{-- <button type="button" class="btn btn-danger" title="Hapus" onclick="hapusSaran({{$saran->id}})"><i class="icon-pencil7"></i></button> --}}
                        <form action="{{route('histori.destroy',$item['id'])}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="myFunction()" title="Hapus"><i class="icon-trash"></i> </button>
                            @csrf
                            @method('DELETE')   
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $historis->links() }}
</div> 



@endsection
