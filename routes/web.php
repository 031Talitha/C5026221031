<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {  //$id itu opsional
    //bisa diisi program apa aja
    return "Halo Apa Kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo Apa Kabar<h1>" ;
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('link', function () {
    return view('link');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('style', function () {
    return view('style');
});

Route::get('TryIt', function () {
    return view('TryIt');
});

Route::get('Web_Framework', function () {
    return view('Web Framework');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime') ;

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir') ;
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses') ;

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD KeranjangBelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index2');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

//route CRUD Bedak
Route::get('/bedak','App\Http\Controllers\BedakController@indexbedak');
Route::get('/bedak/tambah','App\Http\Controllers\BedakController@tambahbedak');
Route::post('/bedak/store','App\Http\Controllers\BedakController@store');
Route::get('/bedak/edit/{kodebedak}','App\Http\Controllers\BedakController@editbedak');
Route::post('/bedak/update','App\Http\Controllers\BedakController@update');
Route::get('/bedak/hapus/{kodebedak}','App\Http\Controllers\BedakController@hapus');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@indexnilai');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route CRUD CHAT
Route::get('/chat','App\Http\Controllers\ChatController@indexchat');
