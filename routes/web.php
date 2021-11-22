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

Route::post('fahrenheit','ViewController@fhr');

Route::get('dice','ViewController@showdice');


Route::post('fibo','ViewController@fibonacci');

Route::post('triangle','ViewController@showtri');

Route::get('tugasphprev','ViewController@showrev');


Route::post('revresult','ViewController@hasilrev');

//Malas Ngoding pegawai
//route CRUD
Route::get('/pegawai','PegawaiController@index');
// Tambah data
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

// Update Data
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');


//Hapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

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
