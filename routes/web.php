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


//route CRUD
Route::get('/pegawai','PegawaiController@index');
