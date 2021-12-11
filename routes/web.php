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
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});
//ulangi cara diatas untuk tugas4
Route::get('tugas4', function () {
    return view('tgs4web');
});

Route::get('praktikum2','ViewController@showPraktikum2');
//ulangi cara ini untuk link ETS dan Tugas PHP
//2 versi = ada yg 2 file, 1 file
//bagi yg 2 file, harus membuat 2 route identified
Route::get('ets','ViewController@showETS');
Route::get('tugasphp','ViewController@showTugasPHP');
Route::post('hasilfibonacci','ViewController@showHasilfibonacci');

//route CRUD PEGAWAI
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD ABSEN
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
