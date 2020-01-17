@extends('layout/master')

@section('title')
    <title>Nilai Kriteria - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Nilai Kriteria</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('nilaikriteria') }}
        {{-- <ul class="breadcrumb">
            <li><a href="{{url('dashboard')}}"><i class="icon-home2 position-left"></i>Home</a></li>
            <li class="active">Nilai Kriteria</li>
        </ul> --}}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Nilai Kriteria</h5>
    </div>

    <div class="panel-body">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_add"><b><i class="icon-user-plus"></i></b> Tambah Nilai Kriteria</button>

    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Alternatif</th>
                <th>Nilai C1</th>
                <th>Nilai C2</th>
                <th>Nilai C3</th>
                <th>Nilai C4</th>
                <th>Nilai C5</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>K01</td>
                <td>Traffic Court Referee</td>
                <td>70</td>
                <td>50</td>
                <td>40</td>
                <td>40</td>
                <td>40</td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" data-toggle="modal" data-target="#modal_edit"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-trash"></i> Hapus</a></li>
                            </ul>
                        </li>
                    </ul>
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
                        <legend class="text-bold">Menambah Data Nilai Kriteria</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Alternatif</label>
                            <div class="col-lg-10">
                                <select name="atribut" class="form-control">
                                    <option value="opt1">Pilih</option>
                                    <option value="ben">Iqbal</option>
                                    <option value="cost">Ikhwan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nilai C1</label>
                            <div class="col-lg-10">
                                <input type="number" name="c1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nilai C2</label>
                            <div class="col-lg-10">
                                <input type="number" name="c2" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nilai C3</label>
                            <div class="col-lg-10">
                                <input type="number" name="c3" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nilai C4</label>
                            <div class="col-lg-10">
                                <input type="number" name="c4" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Nilai C5</label>
                            <div class="col-lg-10">
                                <input type="number" name="c5" class="form-control">
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
                <fieldset class="content-group">
                    <legend class="text-bold">Menambah Data Nilai Kriteria</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Kode</label>
                        <div class="col-lg-10">
                            <input type="text" name="kd" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nama Alternatif</label>
                        <div class="col-lg-10">
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nilai C1</label>
                        <div class="col-lg-10">
                            <input type="number" name="c1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nilai C2</label>
                        <div class="col-lg-10">
                            <input type="number" name="c2" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nilai C3</label>
                        <div class="col-lg-10">
                            <input type="number" name="c3" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nilai C4</label>
                        <div class="col-lg-10">
                            <input type="number" name="c4" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nilai C5</label>
                        <div class="col-lg-10">
                            <input type="number" name="c5" class="form-control">
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
