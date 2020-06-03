@extends('layout/master')

@section('title')
    <title>Nilai Alternatif - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Nilai Alternatif</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('nilaialternatif') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Nilai Alternatif</h5>
    </div>

    <div class="panel-body">
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Nilai Alternatif</button>

    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alternatif</th>
                <th>Kriteria</th>
                <th>Bobot Nilai</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($nilaialternatifs as $key => $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama}}</td>
                <td> {{$item->namakriteria}}</td>
                <td> {{$item->bobotnilai}}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit" onclick="getDataEditNilai({{$item->id}})"><i class="icon-pencil7"></i></button>
                        <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$item->id}}"><i class="icon-trash"></i></a>

                        {{-- <form action="{{route('nilaialternatif.destroy',$item->id)}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="alert('Yakin ingi menghapus ?')" title="Hapus"><i class="icon-trash"></i> </button>
                            @csrf
                            @method('DELETE')   
                        </form> --}}
                    </div>
                </td>
            </tr>
            @endforeach
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
                <form action="{{route('hapus-nilai')}}" method="POST">
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

            <form class="form-horizontal" action="{{route('nilaialternatif.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Menambah Data Nilai Alternatif</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Alternatif</label>
                            <div class="col-lg-10">
                                <select name="alternatif_id" class="form-control" required>
                                    <option value="#">Pilih</option>
                                        @foreach ($alternatifs as $alternatif)            
                                            <option value="{{$alternatif->id}}">{{$alternatif->nama}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Kriteria</label>
                            <div class="col-lg-10">
                                <select name="kriteria_id" id="kriteria" class="form-control" required data-dependt="subkriteria">
                                    <option value="">Pilih</option>
                                        @foreach ($subkriterias as $kriteria)            
                                            <option value="{{$kriteria->id}}">{{$kriteria->namakriteria}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Bobot Nilai</label>
                            <div class="col-lg-10">
                                <select name="bobotnilai" id="subkriteria" class="form-control" required>
                                    <option value="#">Pilih</option>
                                </select>
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

            <form class="form-horizontal" action="{{route('update-nilaialternatif')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Edit Data Nilai Alternatif</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Alternatif</label>
                            <div class="col-lg-10">
                                <input type="hidden" name="id" id="idAlternatif_kriteria">
                                <input type="hidden" class="form-control" name="alternatif_id"  id="alternatif_id">
                                <input type="text" class="form-control" id="alternatif_name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Kriteria</label>
                            <div class="col-lg-10">
                                <select name="kriteria_id" id="kriteria" class="form-control" required data-dependt="subkriteria">
                                    <option value="">Pilih</option>
                                        @foreach ($subkriterias as $kriteria)            
                                            <option value="{{$kriteria->id}}">{{$kriteria->namakriteria}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Bobot Nilai</label>
                            <div class="col-lg-10">
                                <select name="bobotnilai" id="subkriteria" class="form-control" required>
                                    <option value="#">Pilih</option>
                                </select>
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



<script type="text/javascript">
    $( 'select[name="kriteria_id"]' ).change(function() {
        var kriteriaID = $(this).val();
        // console.log(kriteriaID);
        if(kriteriaID){
            $.ajax({
                url : '../getData/subbobot/' + kriteriaID,
                type : "GET",
                dataType : "Json",
                success : function(data) {
                    // console.log(data)
                    $('select[name="bobotnilai"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="bobotnilai"]').append('<option value="'+ value['bobotsub'] +'">'+ value['bobotsub'] +'</option>');                        
                    });
                }
            })
        }
        else
        {
            $('select[name="subkriteria"]').empty();
        }
    });
</script>

<script>
    var url_id = '{{ url('getData/nilaialternatif')}}';
    function getDataEditNilai(id){
        var url_nilai = url_id + '/' + id 
        $.get(url_nilai, function(data){
            $.each(data, function (key, value) {
                $('#idAlternatif_kriteria').val(id);   
                $('#alternatif_id').val(value.alternatif_id);   
                $('#alternatif_name').val(value.nama);   
            })
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
