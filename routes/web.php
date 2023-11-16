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
