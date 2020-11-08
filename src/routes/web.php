<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

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

Route::view('/', 'welcome');

Route::group(['middleware' => ['auth']], function () {
route::post('/mahasiswa/simpan',[MahasiswaController::class,'simpan'])
    ->name('mahasiswa.simpan');
route::get('/mahasiswa',[MahasiswaController::class,'index'])
    ->name('mahasiswa.index');

route::post('/dosen/simpan',[DosenController::class,'simpan'])
    ->name('dosen.simpan');
Route::get('/dosen',[DosenController::class,'index'])
    ->name('dosen.index');

route::post('/kelas.simpan',[KelasController::class,'simpan'])
    ->name('kelas.simpan');
route::get('/kelas',[KelasController::class,'index'])
    ->name('kelas.index');

Route::post('/jadwal/simpan',[JadwalController::class,'simpan'])
    ->name('jadwal.simpan');
Route::get('/jadwal',[JadwalController::class,'index'])
    ->name('jadwal.index');

Route::post('/absensi/simpan',[AbsensiController::class,'simpan'])
    ->name('absensi.simpan');
Route::get('/absensi',[AbsensiController::class,'index'])
    ->name('absensi.index');

Route::post('/matakuliah/simpan',[MatakuliahController::class,'simpan'])
    ->name('matakuliah.index');
Route::get('/matakuliah',[MatakuliahController::class,'index'])
    ->name('jadwal.index');
});

    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
