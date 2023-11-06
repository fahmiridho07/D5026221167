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

Route::get('/blog', function() {
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


