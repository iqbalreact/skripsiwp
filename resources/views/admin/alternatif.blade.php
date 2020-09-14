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
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Alternatif</button>

    </div>

    <table class="table datatable-basic">
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
                    {{-- <td>{{$alternatif->id }}</td> --}}
                    <td>{{$alternatif->nama }}</td>
                    <td>{{$alternatif->deskripsi }}</td>
                    <td>{{$alternatif->solusi }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit" onclick="getDataEditAlternatif({{$alternatif->id}})"><i class="icon-pencil7"></i></button>
                            <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$alternatif->id}}"><i class="icon-trash"></i></a>

                        </div>
                            {{-- <form action="{{route('alternatif.destroy',$alternatif->id)}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="alert('Yakin ingi menghapus ?')" title="Hapus"><i class="icon-trash"></i> </button>
                            @csrf
                            @method('DELETE')   
                        </form> --}}
                    </td>
                </tr>  
                @endforeach
            @else                
            @endif

        </tbody>
    </table>
</div>
<!-- Modal Hapus Mahasiswa -->
<div class="modal fade" id="modalHapusMhs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Alternatif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('hapus-alternatif')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_mahasiswa" id="id-mahasiswa">
                    <p class="text-center mt-3">Apakah Anda Yakin Akan Menghapus ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </div>
            </form>
        </div>
    </div>
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
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Penyakit..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" name="deskripsi" class="form-control" placeholder="Deskripsi Penyakit" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Solusi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" name="solusi"  class="form-control" placeholder="Solusi" required></textarea>
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

            <form class="form-horizontal" method="POST" action="{{route('update-alternatif')}}" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Mengedit Data Alternatif</legend>
                        <input type="hidden" name="id" id="idAlternatif">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama Penyakit</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="namaAlternatif" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="5" name="des" id="desAlternatif" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Solusi</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="5" name="solusi" id="solusiAlternatif" class="form-control"></textarea>
                            </div>
                        </div>
                    </fieldset>      
                    <hr>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-warning">Update<i class="icon-reset position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /edit modal -->
<script>
    var url_id = '{{ url('getData/alternatif')}}';
    function getDataEditAlternatif(id){
        console.log(id)
        var url_alternatif = url_id + '/' + id 
        console.log(url_alternatif)
        $.get(url_alternatif, function(data){
            $('#idAlternatif').val(data.id);
            $('#namaAlternatif').val(data.nama);
            $('#desAlternatif').val(data.deskripsi);
            $('#solusiAlternatif').val(data.solusi);
        });
    }

</script>

<script>
    $(document).on("click", "#tombol-hapus-mhs", function() {
        var idMahasiswa = $(this).data('idmhs');
        $('#id-mahasiswa').val(idMahasiswa);

    });
</script>
@endsection
