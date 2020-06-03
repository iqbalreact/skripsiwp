@extends('layout/master')

@section('title')
    <title>SubKriteria - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman SubKriteria</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('subkriteria') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Sub Kriteria</h5>
    </div>

    <div class="panel-body">
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Kriteria</button>

    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Nama Sub Kriteria</th>
                <th>Bobot</th>
                <th class="text-center" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($subkriterias) != 0)
                @foreach ($subkriterias as $subkriteria)            
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$subkriteria->namakriteria }}</td>
                    <td>{{$subkriteria->namasub }}</td>
                    <td>{{$subkriteria->bobotsub }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit" onclick="getDataEditSubKriteria({{$subkriteria->id}})"><i class="icon-pencil7"></i></button>
                            <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$subkriteria->id}}"><i class="icon-trash"></i></a>

                            {{-- <form action="{{route('subkriteria.destroy',$subkriteria->id)}}" method="POST">
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
                <h5 class="modal-title">Hapus Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('hapus-sub')}}" method="POST">
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

        <form class="form-horizontal" action="{{route('subkriteria.store')}}" method="POST">
            @csrf
            <div class="modal-body">
                <fieldset class="content-group">
                    <legend class="text-bold">Menambah Data Sub  Kriteria</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Kriteria</label>
                        <div class="col-lg-10">

                            <select name="kriteria_id" class="form-control">
                                <option value="">Pilih</option>
                                @foreach ($kriterias as $kriteria) 
                                <option value="{{$kriteria->id}}">{{$kriteria->namakriteria}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nama Sub Kriteria</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="namasub" placeholder="Masukan Nama Sub Kriteria...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bobot</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="bobotsub" placeholder="Masukan Nilai Bobot...">
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

            <form class="form-horizontal" action="{{route('update-subkriteria')}}" method="post">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Menambah Data Sub  Kriteria</legend>
                        <input type="hidden" name="id" id="idSubKriteria">
                        <input type="hidden" name="kriteria_id" id="idKriteria">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama Sub Kriteria</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="namasub" id="namaSubkriteria" placeholder="Masukan Nama Sub Kriteria...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Bobot</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" name="bobotsub" id="bobotSubkriteria" placeholder="Masukan Nilai Bobot...">
                            </div>
                        </div>
                    </fieldset>      
                    <hr>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-teal-400">Submit<i class="icon-arrow-right14 position-right"></i></button>
                </div>
        </div>
    </div>
</div>
<!-- /edit modal -->

<script>
    var url_id = '{{ url('getData/subkriteria')}}';
    function getDataEditSubKriteria(id){
        // console.log(id)
        var url_subkriteria = url_id + '/' + id 
        console.log(url_subkriteria)
        $.get(url_subkriteria, function(data){
            console.log(data);
            $('#idSubKriteria').val(data.id);
            $('#idKriteria').val(data.kriteria_id);
            $('#namaSubkriteria').val(data.namasub);
            $('#bobotSubkriteria').val(data.bobotsub);
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
