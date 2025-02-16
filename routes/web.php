<?php

use App\Http\Controllers\KatalogController;
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

Route::get('/', [KatalogController::class, 'katalog'])->name('katalog');
Route::get('/produk', [KatalogController::class, 'produk'])->name('produk');
Route::get('/tentang', [KatalogController::class, 'tentang'])->name('tentang');
Route::get('/login', [KatalogController::class, 'login'])->name('login');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/tambah_kategori', function () {
    return view('tambah_kategori');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});

Route::get('/edit_produk', function () {
    return view('edit_produk');
});

