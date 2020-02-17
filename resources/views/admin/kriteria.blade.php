@extends('layout/master')

@section('title')
    <title>Kriteria - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Kriteria</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('kriteria') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Kriteria</h5>
    </div>

    <div class="panel-body">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Kriteria</button>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Atribut</th>
                <th>Range</th>
                <th class="text-center" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @if (count($kriterias) != 0)
                @foreach ($kriterias as $kriteria)            
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kriteria->namakriteria }}</td>
                    <td>
                        @if ($kriteria->atribut === "ben")
                            <span class="label label-success">Benefit</span>
                        @else
                            <span class="label label-danger">Cost</span>
                        @endif
                    </td>
                    <td>{{$kriteria->range }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" data-toggle="modal" data-target="#modal_edit" class="btn btn-warning" title="Edit"><i class="icon-pencil7" onclick="getDataEditKriteria({{$kriteria->id}})"></i></button>
                            <form action="{{route('kriteria.destroy',$kriteria->id)}}" method="POST">
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

        <form class="form-horizontal" action="{{route('kriteria.store')}}" method="POST">
            @csrf
            <div class="modal-body">
                <fieldset class="content-group">
                    <legend class="text-bold">Menambah Data Kriteria</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="namakriteria" placeholder="Masukan Nama Kriteria...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Atribut</label>
                        <div class="col-lg-10">
                            <select name="atribut" class="form-control">
                                <option value="ben">Benefit</option>
                                <option value="cost">Cost</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Range (%)</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" name="range" placeholder="Masukan Nilai Bobot...">
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

            <form class="form-horizontal" action="{{route('update-kriteria')}}" method="post">
                @csrf
            <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Mengedit Data Kriteria</legend>
                        <input type="hidden" name="id" id="idKriteria">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="namakriteria" id="namaKriteria" placeholder="Masukan Nama Kriteria...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Atribut</label>
                            <div class="col-lg-10">
                                <select name="atribut" id="atributKriteria" class="form-control">
                                    <option value="opt1">Pilih</option>
                                    <option value="ben">Benefit</option>
                                    <option value="cost">Cost</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Range (%)</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" name="range" id="rangeKriteria" placeholder="Masukan Nilai Bobot...">
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
    var url_id = '{{ url('getData/kriteria')}}';
    function getDataEditKriteria(id){
        // console.log(id)
        var url_alternatif = url_id + '/' + id 
        // console.log(url_alternatif)
        $.get(url_alternatif, function(data){
            $('#idKriteria').val(data.id);
            $('#namaKriteria').val(data.namakriteria);
            $('#atributKriteria').val(data.atribut);
            $('#rangeKriteria').val(data.range);
        });
    }

</script>
@endsection
