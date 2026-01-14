<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('pengguna', UserController::class);
    Route::get('get-jabatan', [JabatanController::class, 'getJabatan'])->name('get.jabatan');
    Route::resource('jabatan', JabatanController::class);
    Route::get('print-pdf', [JabatanController::class, 'printPdf'])->name('print.jabatan');
    //kita tambahkan juga untuk memanggil method grafik dan export excel
    Route::get('grafik-jabatan', [JabatanController::class, 'grafikJabatan'])->name('grafik.jabatan');
    Route::get('get-grafik', [JabatanController::class, 'getGrafik'])->name('get.grafik.jabatan');
    Route::get('export-excel', [JabatanController::class, 'exportExcel'])->name('export.excel');
});
