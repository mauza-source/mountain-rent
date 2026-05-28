<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Halaman Katalog Utama ala Foresta Adventure (Buka: 127.0.0.1:8000)
Route::get('/', [ProductController::class, 'index']);

// Halaman Panel Admin Dashboard (Buka: 127.0.0.1:8000/admin)
Route::get('/admin', [ProductController::class, 'adminDashboard']);

// Jalur Pengelolaan Manajemen Barang (CRUD)
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);  

// Route untuk memanggil halaman produk baru Anda
Route::get('/products', function () {
    // Kita ambil data produk dari database agar looping @foreach nya tidak error kosong
    $products = \App\Models\Product::all(); 
    return view('products', compact('products'));
});