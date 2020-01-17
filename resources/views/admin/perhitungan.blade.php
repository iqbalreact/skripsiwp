@extends('layout/master')

@section('title')
    <title>Perhitungan - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Perhitungan</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{ Breadcrumbs::render('perhitungan') }}
    </div>

@endsection


@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Analisis Perhitungan</h5>
    </div>

    <div class="panel-body text-center">
        <p class="content-group-sm text-muted">Tekan tombol mulai untuk melakukan analisis perhitungan</p>
        <button type="button" class="btn bg-teal-400 btn-lg" id="spinner-light-4"><i class="icon-pulse2"></i> Mulai</button>
    </div>
</div>

@endsection
