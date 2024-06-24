<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('tes', function () {
//     return view('layouts.admin');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
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
