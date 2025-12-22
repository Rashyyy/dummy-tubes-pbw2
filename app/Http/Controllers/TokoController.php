<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Menampilkan daftar semua toko
     */
    public function index()
    {
        // Untuk sekarang, kita panggil view 'index' di folder 'toko'
        return view('toko.index');
    }

    /**
     * Menampilkan produk dari toko tertentu
     */
    public function show($id)
    {
        // Nantinya $id ini dipakai untuk mengambil data toko dari database
        // Untuk sekarang, kita langsung tampilkan view 'show'
        return view('toko.show');
    }

    public function produkDetail($id)
    {
        // Nantinya kita ambil data produk berdasarkan ID dari database
        return view('toko.produk-detail');
    }
}
