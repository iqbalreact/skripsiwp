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
        <ul class="breadcrumb">
            <li><a href="{{url('dashboard')}}"><i class="icon-home2 position-left"></i>Home</a></li>
            <li class="active">Alternatif</li>
        </ul>
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
                <th style="width : 10%">No</th>
                <th>Kode</th>
                <th>Nama Alternatif</th>
                <th>Deskripsi</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lorem, ipsum.</td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td class="text-center">
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal_edit"><i class="icon-pencil7"></i></button> &nbsp;
                    <button type="button" class="btn btn-danger btn-sm" id="sweet_combine"><i class="icon-trash"></i></button>
                    
                </td>
            </tr>
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

            <form class="form-horizontal" action="#">
            <div class="modal-body">
                {{-- <h6 class="text-semibold"></h6> --}}
                    <fieldset class="content-group">
                        <legend class="text-bold">Menambah Data Alternatif</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Kode</label>
                            <div class="col-lg-10">
                                <input type="text" name="kode" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Alternatif...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Keterangan</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="5" name="ket" class="form-control" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </fieldset>      
                    <hr>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-teal-400">Submit<i class="icon-arrow-right14 position-right"></i></button>
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

            <form class="form-horizontal" action="#">
            <div class="modal-body">
                {{-- <h6 class="text-semibold"></h6> --}}
                    <fieldset class="content-group">
                        <legend class="text-bold">Mengedit Data Alternatif</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Kode</label>
                            <div class="col-lg-10">
                                <input type="text" name="kode" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Alternatif...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Keterangan</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="5" name="ket" class="form-control" placeholder="Keterangan"></textarea>
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
