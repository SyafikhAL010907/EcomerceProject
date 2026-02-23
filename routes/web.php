<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukCon;
use App\Http\Controllers\PembelianCon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterCon;


// Route untuk halaman utama
Route::get('/', [ProdukCon::class, 'home'])->name('homeproduk');

// Route untuk pembelian
Route::post('/pembelian/storeinput', [PembelianCon::class, 'storeinput'])->name('storeInputpembelian')->middleware('auth');

// Route untuk register
Route::get('/register', [RegisterCon::class, 'register'])->name('register');
Route::post('/register/action', [RegisterCon::class, 'actionregister'])->name('actionregister');

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');Route::post('/produk/{id}/update-stok', [ProdukCon::class, 'updateStok'])->name('updateStokProduk')->middleware('auth');