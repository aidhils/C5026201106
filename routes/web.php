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

use App\Http\Controllers\ViewController;


/* Menu */
Route::get('/', function () {
    return view('welcome');
});


Route::get('prakpertama', function () {
    return view('praksatu');
});

Route::get('tugasempat', function () {
    return view('empat');
});

Route::get('prakkedua','ViewController@showPraktikum2');

Route::get('etssemtiga','ViewController@showets');

Route::get('tugasphp','ViewController@showphp');


//Tugas PHP
Route::post('fahrenheit','ViewController@fhr');

Route::get('dice','ViewController@showdice');


Route::post('fibo','ViewController@fibonacci');

Route::post('triangle','ViewController@showtri');

Route::get('tugasphprev','ViewController@showrev');


Route::post('revresult','ViewController@hasilrev');


//=======Pegawai===============

Route::get('/pegawai','PegawaiController@index');

// Cari

Route::get('/pegawai/cari','PegawaiController@cari');
// Tambah data
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

// Edit
Route::get('/pegawai/edit/{pegawai_id}','PegawaiController@edit');

// Update
Route::post('/pegawai/update','PegawaiController@update');

// View Detail
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//Hapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


//=======Tugas====================

//Tugas table Tugas
Route::get('/Tugas','TugasController@index');

// Tambah
Route::get('/Tugas/tambah','TugasController@tambah');
Route::post('/Tugas/store','TugasController@store');


// Update
Route::get('/Tugas/edit/{ID}','TugasController@edit');
Route::post('/Tugas/update','TugasController@update');

// Delete
Route::get('/Tugas/hapus/{ID}','TugasController@hapus');

//=======Absen======================

// Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

// View Detail
Route::get('/absen/view/{id}','AbsenController@detail');

//=======Mobil======================
Route::get('/mobil','MobilController@index');
Route::get('/mobil/cari','MobilController@cari');
Route::get('/mobil/tambah','MobilController@tambah');
Route::post('/mobil/store','MobilController@store');
Route::get('/mobil/edit/{kodemobil}','MobilController@edit');
Route::post('/mobil/update','MobilController@update');
Route::get('/mobil/view/{kodemobil}','MobilController@detail');
Route::get('/mobil/hapus/{kodemobil}','MobilController@hapus');

//=======Mobil======================
Route::get('/keranjangbelanja','keranjangbelanjaController@index');
Route::get('/keranjangbelanja/tambah','keranjangbelanjaController@tambah');
Route::post('/keranjangbelanja/store','keranjangbelanjaController@store');
Route::get('/keranjangbelanja/edit/{ID}','keranjangbelanjaController@edit');
Route::post('keranjangbelanja/update','keranjangbelanjaController@update');
Route::get('/keranjangbelanja/hapus/{ID}','keranjangbelanjaController@hapus');

