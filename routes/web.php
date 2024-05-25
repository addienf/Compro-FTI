<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\MBKMController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PKMController;
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

// Akademik
Route::get('/Akademik', function () {
    return view('Content.akademik');
});

Route::get('/Akademik2', function () {
    return view('Content.akademik2');
});

Route::get('/Kerjasama', [KerjasamaController::class, 'indexNasional']);
Route::get('/addKj', [KerjasamaController::class, 'createNasional']);
Route::post('/addKj', [KerjasamaController::class, 'storeNasional']);
Route::get('/Kerjasama/{id}/edit', [KerjasamaController::class, 'editNasional'])->name('Kerjasama.Edit');
Route::put('/Kerjasama/{id}', [KerjasamaController::class, 'updateNasional'])->name('Kerjasama.Update');
Route::delete('Kerjasama/{id}', [KerjasamaController::class, 'destroy'])->name('Kerjasama.Destroy');

Route::get('/Kerjasama-I', [KerjasamaController::class, 'indexInternasional']);
Route::get('/addKjI', [KerjasamaController::class, 'createInternasional']);
Route::post('/addKjI', [KerjasamaController::class, 'storeInternasional']);
Route::get('/Kerjasama-I/{id}/edit', [KerjasamaController::class, 'editInternasional'])->name('KerjasamaI.Edit');
Route::put('/Kerjasama-I/{id}', [KerjasamaController::class, 'updateInternasional'])->name('KerjasamaI.Update');

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
Route::get('/Lomba/{id}/edit', [LombaController::class, 'edit'])->name('Lomba.Edit');
Route::put('/Lomba/{id}', [LombaController::class, 'update'])->name('Lomba.Update');
Route::delete('Lomba/{id}', [LombaController::class, 'destroy'])->name('Lomba.Destroy');

Route::get('/PKM', [PKMController::class, 'index']);
Route::get('/addPKM', [PKMController::class, 'create']);
Route::post('/addPKM', [PKMController::class, 'store']);
Route::get('/PKM/{id}/edit', [PKMController::class, 'edit'])->name('PKM.Edit');
Route::put('/PKM/{id}', [PKMController::class, 'update'])->name('PKM.Update');
Route::delete('PKM/{id}', [PKMController::class, 'destroy'])->name('PKM.Destroy');

Route::get('/Penelitian', [PenelitianController::class, 'index']);
Route::get('/addPenelitian', [PenelitianController::class, 'create']);
Route::post('/addPenelitian', [PenelitianController::class, 'store']);
Route::get('/Penelitian/{id}/edit', [PenelitianController::class, 'edit'])->name('Penelitian.Edit');
Route::put('/Penelitian/{id}', [PenelitianController::class, 'update'])->name('Penelitian.Update');
Route::delete('Penelitian/{id}', [PenelitianController::class, 'destroy'])->name('Penelitian.Destroy');


// Tracer Studi
Route::get('/Tracer', function () {
    return view('Content.tracer_study');
});

Route::get('/Publikasi', function () {
    return view('Content.Publikasi');
});

Route::get('/Penjamin', function () {
    return view('Content.Penjamin_mutu');
});

Route::get('/Dokumen', function () {
    return view('Content.Dokumen');
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

Route::get('/Magang', [MBKMController::class, 'indexMagang']);
Route::get('/addMagang', [MBKMController::class, 'createMagang']);
Route::post('/addMagang', [MBKMController::class, 'storeMagang']);
Route::get('/Magang/{id}/edit', [MBKMController::class, 'editMagang'])->name('Magang.Edit');
Route::put('/Magang/{id}', [MBKMController::class, 'updateMagang'])->name('Magang.Update');
Route::delete('Magang/{id}', [MBKMController::class, 'destroyMagang'])->name('Magang.Destroy');

Route::get('/KKNTematik', [MBKMController::class, 'indexKKN']);
Route::get('/addKKN', [MBKMController::class, 'createKKN']);
Route::post('/addKKN', [MBKMController::class, 'storeKKN']);
Route::get('/KKNTematik/{id}/edit', [MBKMController::class, 'editKKN'])->name('KKN.Edit');
Route::put('/KKNTematik/{id}', [MBKMController::class, 'updateKKN'])->name('KKN.Update');
Route::delete('KKNTematik/{id}', [MBKMController::class, 'destroyKKN'])->name('KKN.Destroy');

Route::get('/Penelitian-MBKM', [MBKMController::class, 'indexPenelitian']);
Route::get('/addPMBKM', [MBKMController::class, 'createPMBKM']);
Route::post('/addPMBKM', [MBKMController::class, 'storePMBKM']);
Route::get('/PMBKMTematik/{id}/edit', [MBKMController::class, 'editPMBKM'])->name('PMBKM.Edit');
Route::put('/PMBKMTematik/{id}', [MBKMController::class, 'updatePMBKM'])->name('PMBKM.Update');
Route::delete('PMBKMTematik/{id}', [MBKMController::class, 'destroyPMBKM'])->name('PMBKM.Destroy');

Route::get('/PKM-MBKM', [MBKMController::class, 'indexPKM']);
Route::get('/addPKMBKM', [MBKMController::class, 'createPKMBKM']);
Route::post('/addPKMBKM', [MBKMController::class, 'storePKMBKM']);
Route::get('/PKMBKMTematik/{id}/edit', [MBKMController::class, 'editPKMBKM'])->name('PKMBKM.Edit');
Route::put('/PKMBKMTematik/{id}', [MBKMController::class, 'updatePKMBKM'])->name('PKMBKM.Update');
Route::delete('PKMBKMTematik/{id}', [MBKMController::class, 'destroyPKMBKM'])->name('PKMBKM.Destroy');

Route::get('/Kewirausahaan', [MBKMController::class, 'indexKewirus']);
Route::get('/addKewirus', [MBKMController::class, 'createKewirus']);
Route::post('/addKewirus', [MBKMController::class, 'storeKewirus']);
Route::get('/KewirusTematik/{id}/edit', [MBKMController::class, 'editKewirus'])->name('Kewirus.Edit');
Route::put('/KewirusTematik/{id}', [MBKMController::class, 'updateKewirus'])->name('Kewirus.Update');
Route::delete('KewirusTematik/{id}', [MBKMController::class, 'destroyKewirus'])->name('Kewirus.Destroy');

Route::get('/AsistenManajer', [MBKMController::class, 'indexAsisten']);
Route::get('/addAsist', [MBKMController::class, 'createAsist']);
Route::post('/addAsist', [MBKMController::class, 'storeAsist']);
Route::get('/AsistenManajer/{id}/edit', [MBKMController::class, 'editAsist'])->name('Asist.Edit');
Route::put('/AsistenManajer/{id}', [MBKMController::class, 'updateAsist'])->name('Asist.Update');
Route::delete('AsistenManajer/{id}', [MBKMController::class, 'destroyAsist'])->name('Asist.Destroy');

Route::get('/StudiIndependen', [MBKMController::class, 'indexStudi']);
Route::get('/addSI', [MBKMController::class, 'createStudi']);
Route::post('/addSI', [MBKMController::class, 'storeStudi']);
Route::get('/StudiIndependen/{id}/edit', [MBKMController::class, 'editStudi'])->name('SI.Edit');
Route::put('/StudiIndependen/{id}', [MBKMController::class, 'updateStudi'])->name('SI.Update');
Route::delete('StudiIndependen/{id}', [MBKMController::class, 'destroyStudi'])->name('SI.Destroy');
