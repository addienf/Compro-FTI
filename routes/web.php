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
Route::get('/Home', function () {
    return view('Content.home');
});

Route::get('/Berita', function () {
    return view('Content.dashboard-berita');
});

Route::get('/Berita-d', function () {
    return view('Content.berita-detail');
});

Route::get('/Fakultas', function () {
    return view('Content.dashboard-vismis');
});

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
