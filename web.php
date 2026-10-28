<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

// Ibrahim Maulana R | No. Absen: 15
Route::get('/', [TokoController::class, 'beranda'])->name('toko.beranda');
Route::get('/produk', [TokoController::class, 'produk'])->name('produk.index');
Route::get('/produk/{id}', [TokoController::class, 'detail'])->name('produk.detail');
Route::get('/beli/{id}/{jumlah}', [TokoController::class, 'beli'])->name('pembelian.struk');
