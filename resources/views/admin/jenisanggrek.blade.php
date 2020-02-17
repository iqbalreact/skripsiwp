@extends('layout/master')

@section('title')
    <title>Jenis Anggrek - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Jenis Anggrek</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('jenisanggrek') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Jenis Anggrek</h5>
    </div>

    <div class="panel-body">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Jenis Anggrek</button>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 20%">Nama Anggrek</th>
                <th>Keterangan</th>
                <th>Gambar</th>
                <th class="text-center" style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($jenisanggreks) != 0)
                @foreach ($jenisanggreks as $jenisanggrek)            
                <tr>
                    <td>{{$no++}}</td>
                    {{-- <td>{{$jenisanggrek->id }}</td> --}}
                    <td>{{$jenisanggrek->nama }}</td>
                    <td>{{$jenisanggrek->keterangan }}</td>
                    <td><img width="150px" src="{{ url('/anggrek/'.$jenisanggrek->gambar) }}"></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <form action="{{route('jenisanggrek.destroy',$jenisanggrek->id)}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="alert('Yakin ingi menghapus ?')" title="Hapus"><i class="icon-trash"></i> </button>
                            </div>
                            @csrf
                            @method('DELETE')   
                        </form>
                    </td>
                </tr>  
                @endforeach
            @else                
            @endif

        </tbody>
    </table>
</div>


<!-- Add/Success modal -->
<div id="modal_add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-teal-400">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Tambah Data</h6>
            </div>            
            <form class="form-horizontal" action="{{route('jenisanggrek.store')}}" enctype='multipart/form-data' method="POST">
                @csrf
            <div class="modal-body">
                <fieldset class="content-group">
                    <legend class="text-bold">Menambah Data Jenis Anggrek</legend>
                    <div class="form-group">

                        <label class="control-label col-lg-2">Nama Anggrek</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anggrek..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10">
                            <textarea rows="3" cols="3" name="keterangan" class="form-control" placeholder="Keterangan Anggrek" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Gambar</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image" placeholder="Upload image" required>
                        </div>
                    </div>
                </fieldset>      
                <hr>    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-teal-400">Submit<i class="icon-arrow-right14 position-right"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /success modal -->
@endsection
