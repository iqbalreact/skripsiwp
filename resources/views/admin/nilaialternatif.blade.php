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
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
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
                        <form action="{{route('nilaialternatif.destroy',$item->id)}}" method="POST">
                            <button type="submit" class="btn btn-danger" onclick="alert('Yakin ingi menghapus ?')" title="Hapus"><i class="icon-trash"></i> </button>
                    </div>
                        @csrf
                        @method('DELETE')   
                    </form>
                </td>
            </tr>
            @endforeach
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

            <form class="form-horizontal" action="{{route('nilaialternatif.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <fieldset class="content-group">
                        <legend class="text-bold">Menambah Data Nilai Alternatif</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Alternatif</label>
                            <div class="col-lg-10">
                                <select name="alternatif_id" class="form-control">
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
                                <select name="kriteria_id" id="kriteria" class="form-control" data-dependt="subkriteria">
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
                                <select name="bobotnilai" id="subkriteria" class="form-control">
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


<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="kriteria_id"]').on('change',function(){
               var kriteriaID = jQuery(this).val();
               if(kriteriaID)
               {
                  jQuery.ajax({
                     url : '../getData/subbobot/' +kriteriaID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="bobotnilai"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="bobotnilai"]').append('<option value="'+ value['bobotsub'] +'">'+ value['bobotsub'] +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="subkriteria"]').empty();
               }
            });
    });
    </script>

@endsection
