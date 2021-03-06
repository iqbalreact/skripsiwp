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

                @foreach ($jenisanggreks as $jenisanggrek => $key)
                
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$key->nama }}</td>
                    <td width="50%"><span>
                        {{$key->keterangan }}
                    </span></td>
                    <td>

                        @foreach (explode('|', $key->gambar) as $image)
                            <img style="width:300px" src="{{ url('/anggrek/'.$image) }}"> <br>
                        @endforeach
                        
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit" onclick="getDataJenisAnggrek({{$key->id}})"><i class="icon-pencil7"></i></button>
                            <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$key->id}}"><i class="icon-trash"></i></a>
                    </td>
                </tr>  
                @endforeach
            @else                
            @endif

        </tbody>
    </table>
</div>

<!-- Modal Hapus Jenis Anggrek -->
<div class="modal fade" id="modalHapusMhs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Jenis Anggrek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('hapus-jenis')}}" method="POST">
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
                            <input type="file" class="form-control" name="image[]" placeholder="Upload image" required multiple>
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
            <div class="modal-header bg-teal-400">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Edit Data</h6>
            </div>

            <form class="form-horizontal" action="{{route('update-jenisanggrek')}}" enctype='multipart/form-data' method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Edit Jenis Anggrek</legend>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" />
                            <label class="control-label col-lg-2">Nama Anggrek</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anggrek..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Keterangan</label>
                            <div class="col-lg-10">
                                <textarea rows="3" cols="3" name="keterangan" id="ket" class="form-control" placeholder="Keterangan Anggrek" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Gambar</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="image[]" placeholder="Upload image" required multiple>
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
<!-- /edit modal -->


<script>
    var url_id = '{{ url('getData/jenisanggrek')}}';
    function getDataJenisAnggrek(id){
        var url_nilai = url_id + '/' + id 
        $.get(url_nilai, function(data){
            $('#id').val(id);   
            $('#nama').val(data.nama);   
            $('#ket').val(data.keterangan);   
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
