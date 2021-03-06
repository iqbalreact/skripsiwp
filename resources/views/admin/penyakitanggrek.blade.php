@extends('layout/master')

@section('title')
    <title>Penyakit Anggrek - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Penyakit Anggrek</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('penyakitanggrek') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Penyakit Anggrek</h5>
    </div>

    <div class="panel-body">
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Penyakit Anggrek</button>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 20%">Nama Penyakit Anggrek</th>
                <th>Keterangan</th>
                <th>Gambar</th>
                <th class="text-center" style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($penyakitanggreks) != 0)
                @foreach ($penyakitanggreks as $penyakitanggrek)            
                <tr>
                    <td>{{$no++}}</td>
                    {{-- <td>{{$penyakitanggrek->id }}</td> --}}
                    <td>{{$penyakitanggrek->nama }}</td>
                    <td>{{$penyakitanggrek->keterangan }}</td>
                    <td>
                        
                        <div class="owl-carousel owl-theme">
                                        
                            @foreach (explode('|', $penyakitanggrek->gambar) as $image)
                            <div class="item">
                                <img width="150px" height="150px" src="{{ url('/penyakit/'.$image) }}">
                            </div> <br>
                            @endforeach
                        </div>
                        {{-- @foreach (explode('|', $penyakitanggrek->gambar) as $image)
                        <img style="width:200px" src="{{ url('/penyakit/'.$image) }}">
                        @endforeach --}}
                        {{-- <img width="150px" src="{{ url('/penyakit/'.$penyakitanggrek->gambar) }}"></td> --}}
                    
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit" onclick="getDataPenyakitAnggrek({{$penyakitanggrek->id}})"><i class="icon-pencil7"></i></button>
                            <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$penyakitanggrek->id}}"><i class="icon-trash"></i></a>
                            {{-- <form action="{{route('penyakitanggrek.destroy',$penyakitanggrek->id)}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="alert('Yakin ingi menghapus ?')" title="Hapus"><i class="icon-trash"></i> </button>
                            </div>
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
                <h5 class="modal-title">Hapus Penyakit Anggrek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('hapus-penyakit')}}" method="POST">
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
            <form class="form-horizontal" action="{{route('penyakitanggrek.store')}}" enctype='multipart/form-data' method="POST">
                @csrf
            <div class="modal-body">
                <fieldset class="content-group">
                    <legend class="text-bold">Menambah Data Penyakit Anggrek</legend>
                    <div class="form-group">

                        <label class="control-label col-lg-2">Nama Penyakit</label>
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

            <form class="form-horizontal" action="{{route('update-penyakitanggrek')}}" enctype='multipart/form-data' method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Edit Penyakit Anggrek</legend>
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


    // $(document).ready(function(){
    //     $(".owl-carousel").owlCarousel({
    //         loop:true,
    //         margin:10,
    //         autoWidth:false,
    //         // nav:true,
    //         singleItem:true,
    //         items: 1,
    //         navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
    //     });
    // });

</script>

<script>
    var url_id = '{{ url('getData/penyakitanggrek')}}';
    function getDataPenyakitAnggrek(id){
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
