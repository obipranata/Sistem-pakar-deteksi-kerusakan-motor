<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', 'HomeController@index');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['admin'])->group(function(){
    Route::post('/jenismotorupdate', 'admin\JenisMotorController@update');
    Route::post('/gejalaupdate', 'admin\GejalaController@update');
    Route::get('/dashboard', 'admin\HomeController@index');
    Route::get('/getGejala', 'admin\KasusLamaController@getGejala');
    Route::get('/admin/konsultasi', 'admin\KonsultasiController@index');
    Route::get('/admin/detailkonsultasi/{email}', 'admin\KonsultasiController@detail');
    Route::post('/admin/updatepengetahuan/{kd_konsultasi}', 'admin\KonsultasiController@updatepengetahuan');

    Route::post('/adddetailkasuslama/{kd_kasus_lama}', 'admin\DetailKasusLamaController@add');
    Route::delete('/deletedetailkasuslama/{kd_detail_kasus_lama}/{kd_kasus_lama}', 'admin\DetailKasusLamaController@delete');

    Route::resource('jenismotor', 'admin\JenisMotorController');
    Route::resource('gejala', 'admin\GejalaController');
    Route::resource('kerusakan', 'admin\KerusakanController');
    Route::resource('pengguna', 'admin\PenggunaController');
    Route::resource('kasuslama', 'admin\KasusLamaController');
    Route::resource('detailkasuslama', 'admin\DetailKasusLamaController');
});

Route::middleware(['user'])->group(function(){
    Route::post('/konsultasi/hitung', 'pengguna\KonsultasiController@hitung');
    Route::post('/riwayat/download', 'pengguna\RiwayatKonsultasiController@download');
    Route::delete('/delete/riwayat/{kd_konsultasi}', 'pengguna\RiwayatKonsultasiController@delete');
    Route::resource('profil', 'pengguna\ProfilController');
    Route::resource('spesifikasi', 'pengguna\SpesifikasiController');
    Route::resource('konsultasi', 'pengguna\KonsultasiController');
    Route::resource('riwayatkonsultasi', 'pengguna\RiwayatKonsultasiController');
});

