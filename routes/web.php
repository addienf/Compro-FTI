<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AuthController;
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

Route::get('/welcome', function () {
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

// Akademik
Route::get('/Akademik2', function () {
    return view('Content.akademik2');
});

Route::get('/Kerjasama', function () {
    return view('Content.Kerjasama');
});

Route::get('/Akademik', function () {
    return view('Content.akademik');
});

//Login Admin
Route::get('Login', [AuthController::class, 'showLoginForm']);
Route::post('post-login', [AuthController::class, 'login']);
Route::get('Logout', [AuthController::class, 'logout']);

// Kemahasiswaan
Route::get('/KegiatanMahasiswa', [KegiatanController::class, 'index']);
Route::get('/addKGT', [KegiatanController::class, 'create']);
Route::post('/addKGT', [KegiatanController::class, 'store']);
Route::get('/KegiatanMahasiswa/{id}/edit', [KegiatanController::class, 'edit'])->name('Kegiatan.Edit');
Route::put('/KegiatanMahasiswa/{id}', [KegiatanController::class, 'update'])->name('Kegiatan.Update');
Route::delete('KegiatanMahasiswa/{id}', [KegiatanController::class, 'destroy'])->name('Kegiatan.Destroy');

Route::get('/PrestasiMahasiswa', [PrestasiController::class, 'index']);
Route::get('/addPres', [PrestasiController::class, 'create']);
Route::post('/addPres', [PrestasiController::class, 'store']);
Route::get('/PrestasiMahasiswa/{id}/edit', [PrestasiController::class, 'edit'])->name('Prestasi.Edit');
Route::put('/PrestasiMahasiswa/{id}', [PrestasiController::class, 'update'])->name('Prestasi.Update');
Route::delete('PrestasiMahasiswa/{id}', [PrestasiController::class, 'destroy'])->name('Prestasi.Destroy');

Route::get('/Lomba', [LombaController::class, 'index']);
Route::get('/addLb', [LombaController::class, 'create']);
Route::post('/addLb', [LombaController::class, 'store']);

Route::get('/Penelitian', function () {
    return view('Content.Penelitian');
});

Route::get('/PKM', function () {
    return view('Content.PKM');
});

// Tracer Studi
Route::get('/Tracer', function () {
    return view('Content.tracer_study');
});

// MBKM
Route::get('/PMM', function () {
    return view('Content.MBKM.PMM1');
});

Route::get('/PMM1', function () {
    return view('Content.MBKM.PMM2');
});

Route::get('/PMM2', function () {
    return view('Content.MBKM.PMM3');
});