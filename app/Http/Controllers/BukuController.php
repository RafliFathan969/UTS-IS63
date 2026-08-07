<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index(): View
    {
        $bukus = Buku::with('kategori')
            ->when(request('search'), function ($query, $search) {
                $query->where('judul', 'like', "%{$search}%")
                    ->orWhere('penulis', 'like', "%{$search}%");
            })
            ->when(request('kategori_id'), function ($query, $kategoriId) {
                $query->where('kategori_id', $kategoriId);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $kategoris = Kategori::orderBy('nama_kategori')->get();

        return view('bukus.index', compact('bukus', 'kategoris'));
    }

    public function create(): View
    {
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        return view('bukus.create', compact('kategoris'));
    }

    public function store(StoreBukuRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('gambar-buku', 'public');
        }

        Buku::create($data);

        return redirect()
            ->route('bukus.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Buku $buku): View
    {
        $buku->load('kategori');

        return view('bukus.show', compact('buku'));
    }

    public function edit(Buku $buku): View
    {
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        return view('bukus.edit', compact('buku', 'kategoris'));
    }

    public function update(UpdateBukuRequest $request, Buku $buku): RedirectResponse
    {
        $buku->update($request->validated());

        if ($request->hasFile('gambar')) {
            // hapus gambar lama biar tidak numpuk file sampah
            if ($buku->gambar) {
                Storage::disk('public')->delete($buku->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('buku', 'public');
        }else {
            $data = $request->validated();
        }

        $buku->update($data);

        return redirect()
            ->route('bukus.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Buku $buku): RedirectResponse
    {
        if ($buku->peminjamans()->exists()) {
            return redirect()
                ->route('bukus.index')
                ->with('error', 'Buku tidak bisa dihapus karena memiliki riwayat peminjaman.');
        }

        $buku->delete();

        return redirect()
            ->route('bukus.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
