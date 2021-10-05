<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
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
    return 'hallo pak';
});

Route::get('laravel', function () {
    return 'hallo laravel';
});

Route::get('tambah', function () {
    $total = 10 + 10;
    return $total;
});
Route::get('kurang', function () {
    $total = 10 - 10;
    return $total;
});
Route::get('kali', function () {
    $total = 10 * 10;
    return $total;
});
Route::get('bagi', function () {
    $total = 10 / 10;
    return $total;
});

// paarameter wajib
Route::get('/nama-framework/{nama}/{tahun}', function ($nama,$tahun) {
    return 'Nama Framework yang dimasukan adalah : ' .$nama. '<br>Tahun <b>Rilis</b> : '.$tahun;
});

// optional parameter
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib diisi') {
    return 'Nama Saya adalah : ' . $nama;
});

Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas,$tinggi) {
    $total = $alas * $tinggi;
     return 'Alas Segitiga : ' .$alas. '<br>Tinggi Segitiga : '. $tinggi.'<br>Hasil Luas Segitiga Nya : '.$total;
});

Route::get('/luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1 ,$tinggi = 1) {
     return 'Luas Segitiga : '.($hasil = $alas * $tinggi) *0.5;
});

// prefix
Route::group(['prefix'=>'jurusan'], function () {
    Route::get('/', function () {
         return 'Berhasil';
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
         return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
         return $nama;
    });
});

Route::get('data-siswa',[DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi',[DataSiswaController::class, 'datasiswi']);
Route::get('nama/{nama?}',[DataSiswaController::class, 'nama']);


Route::resource('user', UserController::class);

Route::get('profile', function () {
    return view('profile.index');
});


