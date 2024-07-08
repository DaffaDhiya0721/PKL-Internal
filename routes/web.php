<?php

use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
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

Route::get('tes', function () {
    return view('layouts.front');
});

Route::get('contact', function () {
    return view('layouts.contact');
});

Route::get('index', function () {
    return view('layouts.index');
});

Route::get('shop', function () {
    return view('layouts.shop');
});

Route::get('cart', function () {
    return view('layouts.cart');
});

Route::get('checkout', function () {
    return view('layouts.checkout');
});

Route::get('track', function () {
    return view('layouts.track');
});

Route::get('about', function () {
    return view('layouts.about');
});

Route::get('detail', function () {
    return view('layouts.shop_detail');
});

Route::get('blog', function () {
    return view('layouts.blog');
});

Route::get('blog_detail', function () {
    return view('layouts.blog_detail');
});
