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
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#modal_theme_success"><b><i class="icon-user-plus"></i></b> Tambah Alternatif</button>
    </div>

    <table class="table datatable-basic table-striped">
        <thead>
            <tr>
                <th style="width : 10%">No</th>
                <th>Kode</th>
                <th>Nama Alternatif</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lorem, ipsum.</td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><span class="label label-success">Active</span></td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-pencil7 text-success"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-trash text-danger"></i> Hapus</a></li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Success modal -->
<div id="modal_theme_success" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-teal-400">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Tambah Data</h6>
            </div>

            <div class="modal-body">
                <h6 class="text-semibold">Masukan Data Alternatif</h6>
                <form class="form-horizontal" action="#">
                    <fieldset class="content-group">
                        <legend class="text-bold">Basic inputs</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Default text input</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Input with placeholder</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Enter your username...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Read only field</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" readonly="readonly" value="read only">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Disabled field</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" disabled="disabled" value="disabled">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Predefined value</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" value="http://">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Default select</label>
                            <div class="col-lg-10">
                                <select name="select" class="form-control">
                                    <option value="opt1">Usual select box</option>
                                    <option value="opt2">Option 2</option>
                                    <option value="opt3">Option 3</option>
                                    <option value="opt4">Option 4</option>
                                    <option value="opt5">Option 5</option>
                                    <option value="opt6">Option 6</option>
                                    <option value="opt7">Option 7</option>
                                    <option value="opt8">Option 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Disabled autocomplete</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Maximum value</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label click</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="clickable-label" placeholder="Field focus on label click">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Static text</label>
                            <div class="col-lg-10">
                                <div class="form-control-static">This is a static text</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Textarea</label>
                            <div class="col-lg-10">
                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>

                <hr>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-teal-400">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- /success modal -->

@endsection
