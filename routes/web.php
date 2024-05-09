<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DaftarAkunController;
use App\Http\Controllers\PerjanjianController;
use App\Http\Controllers\InfoBantuanController;
use App\Http\Controllers\KelasOfflineController;
use App\Http\Controllers\PelatihanOnlineController;

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

Route::get('/', [DashboardController::class, 'landing'])->name('landing');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:poktan')->group(function () {
        Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
        Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
        Route::get('/pengajuan/{pengajuan}/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
        Route::put('/pengajuan/{pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
        Route::delete('/pengajuan/{pengajuan}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');
        Route::put('/perjanjian/{pengajuan}/unggah-poktan', [PerjanjianController::class, 'unggahPoktan'])->name('perjanjian.unggahSuratPoktan');
    });

    Route::middleware('role:poktan|dinas')->group(function() {
        Route::get('/perjanjian', [PerjanjianController::class, 'index'])->name('perjanjian.index');
        Route::get('/perjanjian/{pengajuan}', [PerjanjianController::class, 'show'])->name('perjanjian.show');
    });

    Route::middleware(['role:bpp|dinas'])->group(function () {
        Route::post('/pengajuan/{pengajuan}/update-status-bpp', [PengajuanController::class, 'updateStatusBpp'])->name('pengajuan.update-statusBpp');
        Route::post('/pengajuan/{pengajuan}/update-status-dinas', [PengajuanController::class, 'updateStatusDinas'])->name('pengajuan.update-statusDinas');
    });

    Route::middleware('role:dinas')->group(function () {
        Route::get('/akun/create', [UserController::class, 'create'])->name('akun.create');
        Route::get('/akun/create-poktan', [UserController::class, 'createPoktan'])->name('akun.createPoktan');
        Route::get('/akun/create-bpp', [UserController::class, 'createBpp'])->name('akun.createBpp');
        Route::post('/akun/store-poktan', [UserController::class, 'storePoktan'])->name('akun.storePoktan');
        Route::post('/akun/store-bpp', [UserController::class, 'storeBpp'])->name('akun.storeBpp');
        Route::put('/perjanjian/{pengajuan}/unggah-dinas', [PerjanjianController::class, 'unggahDinas'])->name('perjanjian.unggahSuratDinas');
        Route::resource('info-bantuan', InfoBantuanController::class);
        Route::get('/daftar-akun', [DaftarAkunController::class, 'index'])->name('daftar-akun.index');
        Route::get('/daftar-akun/poktan', [DaftarAkunController::class, 'showPoktan'])->name('daftar-akun.showPoktan');
        Route::get('/daftar-akun/bpp', [DaftarAkunController::class, 'showBpp'])->name('daftar-akun.showBpp');
    });

    Route::middleware('role:poktan|bpp|dinas')->group(function () {
        Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
        Route::get('/pengajuan/{pengajuan}', [PengajuanController::class, 'show'])->name('pengajuan.show');
        Route::get('/akun', [UserController::class, 'index'])->name('akun.index');
        Route::put('/akun/{user}', [UserController::class, 'update'])->name('akun.update');
        Route::get('/akun/{user}', [UserController::class, 'show'])->name('akun.show');
    });

    Route::middleware('role:bpp')->group(function () {
        Route::get('/bpp/pelatihan', [PelatihanOnlineController::class, 'index'])->name('bpp.pelatihan.index');
        Route::get('/bpp/pelatihan/create', [PelatihanOnlineController::class, 'create'])->name('bpp.pelatihan.create');
        Route::get('/bpp/pelatihan/{pelatihanOnline}', [PelatihanOnlineController::class, 'show'])->name('bpp.pelatihan.show');
        Route::post('/bpp/pelatihan', [PelatihanOnlineController::class, 'store'])->name('bpp.pelatihan.store');
        Route::get('/bpp/pelatihan/{pelatihanOnline}/edit', [PelatihanOnlineController::class, 'edit'])->name('bpp.pelatihan.edit');
        Route::put('/bpp/pelatihan/{pelatihanOnline}', [PelatihanOnlineController::class, 'update'])->name('bpp.pelatihan.update');
        Route::delete('/bpp/pelatihan/{pelatihanOnline}', [PelatihanOnlineController::class, 'destroy'])->name('bpp.pelatihan.destroy');

        Route::get('/bpp/kelas', [KelasOfflineController::class, 'index'])->name('bpp.kelas.index');
        Route::get('/bpp/kelas/create', [KelasOfflineController::class, 'create'])->name('bpp.kelas.create');
        Route::get('/bpp/kelas/{kelasOffline}', [KelasOfflineController::class, 'show'])->name('bpp.kelas.show');
        Route::post('/bpp/kelas', [KelasOfflineController::class, 'store'])->name('bpp.kelas.store');
        Route::get('/bpp/kelas/{kelasOffline}/edit', [KelasOfflineController::class, 'edit'])->name('bpp.kelas.edit');
        Route::put('/bpp/kelas/{kelasOffline}', [KelasOfflineController::class, 'update'])->name('bpp.kelas.update');
        Route::delete('/bpp/kelas/{kelasOffline}', [KelasOfflineController::class, 'destroy'])->name('bpp.kelas.destroy');
    });


});

Route::get('/pelatihan-online', [PelatihanOnlineController::class, 'indexLanding'])->name('landing.pelatihan.index');
Route::get('/pelatihan-online/{pelatihanOnline}', [PelatihanOnlineController::class, 'showPelatihanLanding'])->name('landing.pelatihan.show');

Route::get('/kelas-offline', [KelasOfflineController::class, 'indexLanding'])->name('landing.kelas.index');
Route::get('/kelas-offline/{kelasOffline}', [KelasOfflineController::class, 'showKelasLanding'])->name('landing.kelas.show');
