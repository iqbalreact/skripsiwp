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
Route::get('/', function () {
    return view('user.blade.beranda');
});
Route::get('/tentang', function () {
    return view('user.blade.tentang');
});

Route::get('/jenisanggrek', function () {
    return view('user.blade.jenisanggrek');
});

Route::get('/jenispenyakit', function () {
    return view('user.blade.jenispenyakit');
});
Route::get('/saran', function () {
    return view('user.blade.saran');
});
Route::get('/cekpenyakit', function () {
    return view('user.blade.cekpenyakit');
});



Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('/alternatif', 'AlternatifController');
Route::resource('/kriteria', 'KriteriaController');
Route::resource('/subkriteria', 'SubkriteriaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


