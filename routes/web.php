<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

//route melihat daftar produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

//route menambah produk
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
