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


@section('panel-title')
    <h5 class="panel-title">Daftar Alternatif SPK - Weight Product</h5>  
@endsection

@section('panel-body')

    <div class="panel-body">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, dolorem?</p>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Alternatif</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>SKM-007</td>
                <td>Muhammad Iqbal, S.Kom</td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection
