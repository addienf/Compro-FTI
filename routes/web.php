<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Landing & Berita
Route::get('/home', function () {
    return view('content.home');
});

Route::get('/berita', function () {
    return view('content.dashboard-berita');
});

Route::get('/berita-d', function () {
    return view('content.berita-detail');
});

Route::get('/fakultas', function () {
    return view('content.dashboard-vismis');
  
Route::get('/Akademik', function () {
    return view('akademik');
});

// Kemahasiswaan
Route::get('/KegiatanMahasiswa', function () {
    return view('Content.KegiatanMahasiswa');
});

Route::get('/PrestasiMahasiswa', function () {
    return view('Content.PrestasiMahasiswa');
});

Route::get('/Lomba', function () {
    return view('Content.Lomba');
});

Route::get('/Penelitian', function () {
    return view('Content.Penelitian');
});

Route::get('/PKM', function () {
    return view('Content.PKM');

});
