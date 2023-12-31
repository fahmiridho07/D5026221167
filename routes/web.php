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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<marquee>Halo, Selamat datang<marquee>";
});

Route::get('/blog2', function() {
    return view('blog');
});

Route::get('/ets', function() {
    return view('ets');
});

Route::get('/js1', function() {
    return view('js1');
});

Route::get('/js2', function() {
    return view('js2');
});

Route::get('/latihan1', function() {
    return view('latihan1');
});

Route::get('/responsive', function() {
    return view('responsive');
});

Route::get('/validasi', function() {
    return view('validasi');
});

Route::get('/linktree', function() {
    return view('linktree');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('/pegawai1/{nama}', 'App\Http\Controllers\DosenController@shownama');


// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//CRUD pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiKuliahController@storenilai');

//flashdisk
Route::get('/flashdisk','App\Http\Controllers\FlashDiskController@index');
Route::get('/flashdisk/tambah','App\Http\Controllers\FlashDiskController@tambah');
Route::post('/flashdisk/store','App\Http\Controllers\FlashDiskController@store');
Route::get('/flashdisk/edit/{id}','App\Http\Controllers\FlashDiskController@edit');
Route::post('/flashdisk/update','App\Http\Controllers\FlashDiskController@update');
Route::get('/flashdisk/hapus/{id}','App\Http\Controllers\FlashDiskController@hapus');
Route::get('/flashdisk/cari','App\Http\Controllers\FlashDiskController@cari');
Route::get('/flashdisk/view/{id}','App\Http\Controllers\FlashDiskController@view');

//kode soal CC
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::get('/kategori/hasilcombo','App\Http\Controllers\KategoriController@view');
