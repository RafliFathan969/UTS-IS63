<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PeminjamanController extends Controller
{
    public function index(): View
    {
        $peminjamans = Peminjaman::with('buku')
            ->when(request('search'), function ($query, $search) {
                $query->where('nama_peminjam', 'like', "%{$search}%");
            })
            ->when(request('status'), function ($query, $status) {
                $query->where('status', $status);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('peminjamans.index', compact('peminjamans'));
    }

    public function create(): View
    {
        $bukus = Buku::where('stok', '>', 0)->orderBy('judul')->get();

        return view('peminjamans.create', compact('bukus'));
    }

    /**
     * Simpan peminjaman baru.
     * Stok buku otomatis dikurangi sejumlah yang dipinjam,
     * dibungkus dalam transaksi agar data tetap konsisten.
     */
    public function store(StorePeminjamanRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {
            $buku = Buku::lockForUpdate()->findOrFail($request->buku_id);

            if ($buku->stok < $request->jumlah) {
                throw ValidationException::withMessages([
                    'jumlah' => 'Stok buku tidak mencukupi. Sisa stok: '.$buku->stok,
                ]);
            }

            Peminjaman::create($request->validated());

            $buku->decrement('stok', $request->jumlah);
        });

        return redirect()
            ->route('peminjamans.index')
            ->with('success', 'Peminjaman berhasil dicatat.');
    }

    public function show(Peminjaman $peminjaman): View
    {
        $peminjaman->load('buku.kategori');

        return view('peminjamans.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman): View
    {
        $bukus = Buku::orderBy('judul')->get();

        return view('peminjamans.edit', compact('peminjaman', 'bukus'));
    }

    /**
     * Perbarui data peminjaman.
     * Jika status berubah menjadi "dikembalikan", stok buku dikembalikan.
     */
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman): RedirectResponse
    {
        DB::transaction(function () use ($request, $peminjaman) {
            $statusSebelumnya = $peminjaman->status;

            $peminjaman->update($request->validated());

            $sudahDikembalikanSebelumnya = $statusSebelumnya === 'dikembalikan';
            $sekarangDikembalikan = $peminjaman->status === 'dikembalikan';

            if (! $sudahDikembalikanSebelumnya && $sekarangDikembalikan) {
                $peminjaman->buku->increment('stok', $peminjaman->jumlah);
            }

            if ($sudahDikembalikanSebelumnya && ! $sekarangDikembalikan) {
                $peminjaman->buku->decrement('stok', $peminjaman->jumlah);
            }
        });

        return redirect()
            ->route('peminjamans.index')
            ->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Peminjaman $peminjaman): RedirectResponse
    {
        DB::transaction(function () use ($peminjaman) {
            if ($peminjaman->status !== 'dikembalikan') {
                $peminjaman->buku->increment('stok', $peminjaman->jumlah);
            }

            $peminjaman->delete();
        });

        return redirect()
            ->route('peminjamans.index')
            ->with('success', 'Peminjaman berhasil dihapus.');
    }
}
