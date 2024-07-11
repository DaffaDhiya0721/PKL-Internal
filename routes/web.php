<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });
    // Untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('barang', App\Http\Controllers\BarangController::class);
    Route::resource('barang_masuk', App\Http\Controllers\BarangMasukController::class);
    Route::resource('barang_keluar', App\Http\Controllers\BarangKeluarController::class);
    Route::resource('pinjaman', App\Http\Controllers\PinjamanController::class);
    Route::resource('pengembalian', App\Http\Controllers\PengembalianController::class);
});
