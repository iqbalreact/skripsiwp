@extends('layout/master')

@section('title')
    <title>Saran - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Saran</h4>
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
        <h5 class="panel-title">Data saran</h5>
    </div>

    {{-- <div class="panel-body">
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah saran</button>
    </div> --}}

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 20%">Nama</th>
                <th>Email</th>
                <th>Saran</th>
                <th class="text-center" style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($sarans) != 0)
                @foreach ($sarans as $saran)            
                <tr>
                    <td>{{$no++}}</td>
                    {{-- <td>{{$saran->id }}</td> --}}
                    <td>{{$saran->nama }}</td>
                    <td>{{$saran->email }}</td>
                    <td>{{$saran->saran }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            {{-- <button type="button" class="btn btn-danger" title="Hapus" onclick="hapusSaran({{$saran->id}})"><i class="icon-pencil7"></i></button> --}}
                            <form action="{{route('saran.destroy',$saran->id)}}" method="POST">
                                <button type="submit" class="btn btn-danger" onclick="myFunction()" title="Hapus"><i class="icon-trash"></i> </button>
                                @csrf
                                @method('DELETE')   
                            </form>
                        </div>
                    </td>
                </tr>  
                @endforeach
            @else                
            @endif

        </tbody>
    </table>
</div> 



@endsection
