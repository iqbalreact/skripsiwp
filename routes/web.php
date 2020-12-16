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
        Route::resource('/saran', 'SaranController');
        Route::post('/updateTentang', 'GetDataController@updateTentang')->name('update-tentang');
        Route::post('/updateAlternatif', 'GetDataController@updateAlternatif')->name('update-alternatif');
        Route::post('/updateKriteria', 'GetDataController@updateKriteria')->name('update-kriteria');
        Route::post('/updateSubKriteria', 'GetDataController@updateSubKriteria')->name('update-subkriteria');
        Route::post('/updateNilaiAlternatif', 'GetDataController@updateNilaiAlternatif')->name('update-nilaialternatif');
        Route::post('/updateJenisAnggrek', 'GetDataController@updateJenisAnggrek')->name('update-jenisanggrek');
        Route::post('/updatePenyakitAnggrek', 'GetDataController@updatePenyakitAnggrek')->name('update-penyakitanggrek');

        Route::post('/hapusJenis', 'HapusDataController@hapusJenis')->name('hapus-jenis');
        Route::post('/hapusPenyakit', 'HapusDataController@hapusPenyakit')->name('hapus-penyakit');
        Route::post('/hapusTentang', 'HapusDataController@hapusTentang')->name('hapus-tentang');
        Route::post('/hapusnilai', 'HapusDataController@hapusnilai')->name('hapus-nilai');
        Route::post('/hapussub', 'HapusDataController@hapussub')->name('hapus-sub');
        Route::post('/hapuskriteria', 'HapusDataController@hapuskriteria')->name('hapus-kriteria');
        Route::post('/hapusalternatif', 'HapusDataController@hapusalternatif')->name('hapus-alternatif');

    });

    Route::group(['prefix'=>'getData'],function(){
        Route::get('/alternatif/{alternatif} ', 'GetDataController@getAlternatif')->name('getAlternatif');
        Route::get('/kriteria/{kriterium} ', 'GetDataController@getKriteria')->name('getKriteria');
        Route::get('/subkriteria/{subkriterium} ', 'GetDataController@getSubKriteria')->name('getSubKriteria');
        Route::get('/subbobot/{subkriterium} ', 'GetDataController@getSubBobot')->name('getSubBobot');
        Route::get('/nilaialternatif/{nilaialternatif} ', 'GetDataController@getNilaAlternatif')->name('getNilaAlternatif');
        Route::get('/tentang/{tentang} ', 'GetDataController@getTentang')->name('getTentang');
        Route::get('/jenisanggrek/{jenisanggrek} ', 'GetDataController@getJenisAnggrek')->name('getJenisAnggrek');
        Route::get('/penyakitanggrek/{penyakitanggrek} ', 'GetDataController@getPenyakitAnggrek')->name('getPenyakitAnggrek');
    });
});

Auth::routes();

Route::get('/', 'UserController@beranda')->name('beranda');
Route::get('/tentangaplikasi', 'UserController@tentang')->name('tentang');
Route::get('/jenispenyakit', 'UserController@penyakitanggrek')->name('penyakitanggrek');
Route::get('/jenisanggrek', 'UserController@jenisanggrek')->name('jenisanggrek');
Route::get('/cekpenyakit', 'UserController@cekpenyakit')->name('cekpenyakit');
Route::get('/saran', 'UserController@saran')->name('saran');
Route::post('/add-saran', 'UserController@addsaran')->name('add-saran');
Route::post('/perhitunganwp', 'UserController@perhitunganWP')->name('perhitunganwp');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('histori', 'HistoriController');



