<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/alternatif', function () {
    return view('admin/alternatif');
});
Route::get('/kriteria', function () {
    return view('admin/kriteria');
});
Route::get('/nilaikriteria', function () {
    return view('admin/nilaikriteria');
});
Route::get('/perhitungan', function () {
    return view('admin/perhitungan');
});