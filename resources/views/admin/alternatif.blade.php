@extends('layout/master')

@section('title')
    <title>Alternatif - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Alternatif</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('alternatif') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Alternatif</h5>
    </div>

    <div class="panel-body">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Alternatif</button>

    </div>

    <table class="table datatable-basic table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 20%">Nama Alternatif</th>
                <th>Deskripsi</th>
                <th>Solusi</th>
                <th class="text-center" style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($alternatifs) != 0)
                @foreach ($alternatifs as $alternatif)            
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$alternatif->nama }}</td>
                    <td>{{$alternatif->deskripsi }}</td>
                    <td>{{$alternatif->solusi }}</td>
                    <td class="text-center">
                        <form action="{{route('alternatif.destroy',$alternatif->id)}}" method="POST">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit"><i class="icon-pencil7"></i></button>
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

            
            
            <form class="form-horizontal" action="{{route('alternatif.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Menambah Data Alternatif</legend>
                        <div class="form-group">

                            <label class="control-label col-lg-2">Nama Penyakit</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Penyakit..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Penyakit" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Solusi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" name="solusi" id="solusi" class="form-control" placeholder="Solusi" required></textarea>
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

<!-- Edit modal -->
<div id="modal_edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Edit Data</h6>
            </div>

            <form class="form-horizontal">
                {{-- @csrf
                @method(PUT) --}}
            <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Mengedit Data Alternatif</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Kode</label>
                            <div class="col-lg-10">
                                <input type="text" name="kode" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama Penyakit</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Penyakit...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="5" name="des" class="form-control" placeholder="Deskripsi Penyakit"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Solusi</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="5" name="solusi" class="form-control" placeholder="Solusi"></textarea>
                            </div>
                        </div>
                    </fieldset>      
                    <hr>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-warning">Update<i class="icon-reset position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /edit modal -->

@endsection
