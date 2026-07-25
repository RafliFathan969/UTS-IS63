<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalBuku = Buku::count();
        $totalKategori = Kategori::count();
        $totalStok = Buku::sum('stok');
        $totalDipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $totalTerlambat = Peminjaman::where('status', 'terlambat')->count();

        $peminjamanTerbaru = Peminjaman::with('buku')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalBuku',
            'totalKategori',
            'totalStok',
            'totalDipinjam',
            'totalTerlambat',
            'peminjamanTerbaru'
        ));
    }
}
