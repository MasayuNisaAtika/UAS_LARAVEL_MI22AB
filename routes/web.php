<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
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
Route::get('/tentang', [KatalogController::class, 'tentang'])->name('tentang');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::resource('/produk', ProdukController::class);
Route::resource('/kategori', KategoriController::class);


Route::get('/tambah_kategori', function () {
    return view('tambah_kategori');
});


Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});

Route::get('/edit_produk', function () {
    return view('edit_produk');
});

