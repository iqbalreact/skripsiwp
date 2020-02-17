<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Alternatif
Breadcrumbs::for('alternatif', function ($trail) {
    $trail->parent('home');
    $trail->push('Alternatif', route('alternatif.index'));
});

// Home > Kriteria
Breadcrumbs::for('kriteria', function ($trail) {
    $trail->parent('home');
    $trail->push('Kriteria', route('kriteria.index'));
});

Breadcrumbs::for('nilaialternatif', function ($trail) {
    $trail->parent('home');
    $trail->push('Nilai Alternatif', route('nilaialternatif.index'));
});


// Home > Nilai Kriteria
Breadcrumbs::for('subkriteria', function ($trail) {
    $trail->parent('home');
    $trail->push('Sub Kriteria', route('subkriteria.index'));
});
Breadcrumbs::for('jenisanggrek', function ($trail) {
    $trail->parent('home');
    $trail->push('Jenis Anggrek', route('jenisanggrek.index'));
});
Breadcrumbs::for('penyakitanggrek', function ($trail) {
    $trail->parent('home');
    $trail->push('Penyakit Anggrek', route('penyakitanggrek.index'));
});

Breadcrumbs::for('tentang', function ($trail) {
    $trail->parent('home');
    $trail->push('Tentang Aplikasi', route('tentang.index'));
});

// Home > Perhitungan
Breadcrumbs::for('perhitungan', function ($trail) {
    $trail->parent('home');
    $trail->push('Perhitungan', route('perhitungan'));
});

