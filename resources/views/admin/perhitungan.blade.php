@extends('layout/master')

@section('title')
    <title>Dashboard - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Dashboard</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i>Dashboard</a></li>
        </ul>
    </div>

@endsection


@section('panel-title')

    <h5 class="panel-title">
        Hasil Perhitungan
    </h5>
    
@endsection

@section('panel-body')

<p>Ini Halaman perhitungan</p>
    
@endsection
