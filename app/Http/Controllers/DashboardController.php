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

        return view('dashboard.index', compact(
            'kategori',
            'buku',
            'peminjaman'
        ));
    }
}
