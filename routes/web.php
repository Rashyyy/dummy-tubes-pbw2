<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route yang bisa diakses SEMUA ROLE setelah login (Profile & Dashboard Umum)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ================= ROLE ADMIN =================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/users', function () {
        return view('admin.users.index');
    })->name('admin.users');
});

// ================= ROLE OWNER =================
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', function () {
        return view('owner.dashboard');
    })->name('owner.dashboard');

    Route::get('/owner/produk', function () {
        return view('owner.produk-index');
    })->name('owner.produk');

    Route::get('/owner/produk/tambah', function () {
        return view('owner.produk-create');
    })->name('owner.produk.create');

    Route::get('/owner/pesanan', function () {
        return view('owner.pesanan-masuk');
    })->name('owner.pesanan');
});

// ================= ROLE BUYER =================
Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/toko/{id}', [TokoController::class, 'show'])->name('toko.show');
    Route::get('/produk/{id}', [TokoController::class, 'produkDetail'])->name('produk.detail');
    
    Route::get('/pesanan', function () {
        return view('toko.pesanan');
    })->name('pesanan.index');
});

require __DIR__.'/auth.php';