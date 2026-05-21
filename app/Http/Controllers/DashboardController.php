<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Buku;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $buku = Buku::count();
        $peminjaman = Peminjaman::count();

        // Ambil data list peminjaman beserta buku dan kategorinya
        $listPeminjaman = Peminjaman::with('buku.kategori')->get();

        return view('dashboard', compact('kategori', 'buku', 'peminjaman', 'listPeminjaman'));
    }
}
