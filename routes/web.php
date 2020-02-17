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

Route::group(['middleware'=> ['auth']], function() {
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/', 'HomeController@index')->name('admin');
        Route::resource('/alternatif', 'AlternatifController');
        Route::resource('/kriteria', 'KriteriaController');
        Route::resource('/subkriteria', 'SubkriteriaController');
        Route::resource('/nilaialternatif', 'NilaialternatifController');
        Route::resource('/jenisanggrek', 'JenisanggrekController');
        Route::resource('/penyakitanggrek', 'PenyakitanggrekController');
        Route::resource('/tentang', 'TentangController');
        Route::post('/updateAlternatif', 'GetDataController@updateAlternatif')->name('update-alternatif');
        Route::post('/updateKriteria', 'GetDataController@updateKriteria')->name('update-kriteria');
        Route::post('/updateSubKriteria', 'GetDataController@updateSubKriteria')->name('update-subkriteria');
        Route::post('/updateNilai', 'GetDataController@updateNilai')->name('update-nilai');
    });

    Route::group(['prefix'=>'getData'],function(){
        Route::get('/alternatif/{alternatif} ', 'GetDataController@getAlternatif')->name('getAlternatif');
        Route::get('/kriteria/{kriterium} ', 'GetDataController@getKriteria')->name('getKriteria');
        Route::get('/subkriteria/{subkriterium} ', 'GetDataController@getSubKriteria')->name('getSubKriteria');
        Route::get('/subbobot/{subkriterium} ', 'GetDataController@getSubBobot')->name('getSubBobot');
    });
});

Auth::routes();

Route::get('/', 'UserController@beranda')->name('beranda');
Route::get('/tentangaplikasi', 'UserController@tentang')->name('tentang');
Route::get('/jenispenyakit', 'UserController@penyakitanggrek')->name('penyakitanggrek');
Route::get('/jenisanggrek', 'UserController@jenisanggrek')->name('jenisanggrek');
Route::get('/cekpenyakit', 'UserController@cekpenyakit')->name('cekpenyakit');
Route::get('/saran', 'UserController@saran')->name('saran');
Route::get('/perhitunganwp', 'UserController@perhitunganWP')->name('perhitunganwp');
Route::get('/home', 'HomeController@index')->name('home');




