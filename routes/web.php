<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController; // 1. Tambahkan ini
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua route di bawah ini hanya bisa diakses jika sudah login
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/users', function () {
        return view('admin.users.index');
    })->name('admin.users');

    // Route Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. Tambahkan Route Toko di sini
    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/{id}', [TokoController::class, 'show'])->name('toko.show');
    Route::get('/produk/{id}', [TokoController::class, 'produkDetail'])->name('produk.detail');

    Route::get('/owner/dashboard', function () {
        return view('owner.dashboard');
    })->name('owner.dashboard');

    Route::get('/owner/produk', function () {
        return view('owner.produk-index');
    })->name('owner.produk');

    Route::get('/owner/produk/tambah', function () {
        return view('owner.produk-create');
    })->name('owner.produk.create');

    Route::get('/pesanan', function () {
        return view('toko.pesanan');
    })->name('pesanan.index');
    
    Route::get('/owner/pesanan', function () {
        return view('owner.pesanan-masuk');
    })->name('owner.pesanan');
});

require __DIR__.'/auth.php';