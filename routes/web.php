<?php

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
    return view('beranda');
})->name('beranda');

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', function () {
//     return view('login');
// })->name('login');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'loginform'])->name('loginform');
Route::post('/login-user', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/daftar', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('registerform');
Route::post('/daftar-user', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
// Route::post('masuk', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/ganti-password', function () {
    return view('ganti-password');
});

Route::get('/riwayat-pembelian', function () {
    return view('riwayat-pembelian');
});

Route::get('/riwayat-pemesanan', function () {
    return view('riwayat-pemesanan');
});

Route::get('/ubah-informasi', function () {
    return view('ubah-informasi');
});

Route::get('/keranjang-saya', function () {
    return view('keranjang-saya');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/request-barang', function () {
    return view('request-barang');
});

Route::get('/detail-barang-1', function () {
    return view('detail-barang-1');
});

Route::get('/detail-barang-2', function () {
    return view('detail-barang-2');
});

Route::get('/detail-barang-3', function () {
    return view('detail-barang-3');
});

Route::get('/detail-barang-4', function () {
    return view('detail-barang-4');
});

Route::get('/lupa-pass', function () {
    return view('lupa-pass');
});

Route::get('/favorit', function () {
    return view('favorit');
});

Route::get('/detail-pemesanan', function () {
    return view('detail-pemesanan');
});

Route::get('/koleksi', function () {
    return view('koleksi');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
