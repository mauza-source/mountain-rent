<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Halaman Utama (Tampilkan Data)
Route::get('/', [ProductController::class, 'index']);

// Halaman Form Tambah Barang
Route::get('/product/create', [ProductController::class, 'create']);

// Proses Simpan Barang Baru ke Database
Route::post('/product/store', [ProductController::class, 'store']);

// Proses Hapus Barang dari Database
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);

// Edit & Update Barang
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);