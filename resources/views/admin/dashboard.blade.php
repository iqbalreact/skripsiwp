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

@endsection

@section('panel-body')

<div class="row">
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$alternatifCount}}</h3>
                    <div>Data Alternatif</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$kriteriaCount}}</h3>
                    <div>Data Kriteria</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$subkriteriaCount}}</h3>
                    <div>Data Subkriteria</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$nilaikriteriaCount}}</h3>
                    <div>Data Nilai Alternatif</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$jenisCount}}</h3>
                    <div>Data Jenis Anggrek</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$penyakitCount}}</h3>
                    <div>Data Penyakit Anggrek</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$historiCount}}</h3>
                    <div>Data Histori</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel text-center">
            <div class="panel-body">
                <div class="content-group-sm svg-center position-relative" id="hours-available-progress">
                    <h3>{{$saranCount}}</h3>
                    <div>Data Saran</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
