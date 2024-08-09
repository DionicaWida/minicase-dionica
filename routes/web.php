<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pegawai');
// });
Route::get('/',[PegawaiController::class,'index'])->name('pegawai');
Route::get('/tambahpegawai',[PegawaiController::class,'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertpegawai',[PegawaiController::class,'insertpegawai'])->name('insertpegawai');