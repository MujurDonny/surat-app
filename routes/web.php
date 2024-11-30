<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Laporan\SuratMasukController;
use App\Http\Controllers\Laporan\SuratKeluarController;
use App\Http\Controllers\Laporan\DisposisiSuratMasukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Data\Datamasuk\DataMasukController;
use App\Http\Controllers\Data\Datakeluar\DataKeluarController;
use App\Http\Controllers\PetugasController;

Route::get('/data-petugas', [PetugasController::class, 'index'])->middleware('auth')->name('data-petugas');
Route::get('/data-keluar', [DataKeluarController::class, 'index'])->name('data-surat-keluar.index');
Route::get('/data-surat-masuk', [DataMasukController::class, 'index'])->name('data-surat-masuk.index');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerPost'])->name('register.post');
});
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/suratmasuk', [SuratMasukController::class, 'index'])->name('home');

Route::get('laporan/disposisiSuratMasuk', [DisposisiSuratMasukController::class, 'index'])
    ->name('laporan.disposisiSuratMasuk');
Route::prefix('laporan')->name('laporan.')->group(function () {
    Route::get('suratKeluar', [SuratKeluarController::class, 'show'])->name('suratKeluar');
    Route::get('suratKeluar/download/{type}', [SuratKeluarController::class, 'downloadTemplate'])->name('suratKeluar.download');
});
Route::get('/laporan/surat-masuk', [SuratMasukController::class, 'index'])->name('laporan.suratMasuk.index');
Route::get('/surat', [SuratMasukController::class, 'index'])->name('surat.index');

Route::post('/suratmasuk/store', [SuratMasukController::class, 'store'])->name('suratmasuk.store');
Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('suratmasuk.index');
Route::middleware('auth')->get('/', [HomeController::class, 'index'])->name('home');
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
