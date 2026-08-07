@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Buku</h1>
        <a href="{{ route('bukus.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th style="width:200px">Judul</th>
                    <td>{{ $buku->judul }}</td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td>{{ $buku->penulis }}</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $buku->kategori->nama_kategori }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>
                        <span class="badge {{ $buku->stok > 0 ? 'badge-success' : 'badge-danger' }}">
                            {{ $buku->stok }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ $buku->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui</th>
                    <td>{{ $buku->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>
            {{-- ===== KOLOM KIRI: PROFIL ===== --}}
                <div class="col-xl-4 col-lg-5">

                    {{-- Kartu Foto & Nama --}}
                    <div class="card shadow mb-4">
                        <div class="card-body text-center py-4">
                            @if ($buku->gambar)
                                <img src="{{ Storage::url($buku->gambar) }}" class="rounded-circle mb-3"
                                    style="width:120px;height:120px;object-fit:cover;">
                            @else
                                <div class="rounded-circle bg-gradient-primary d-inline-flex
                                align-items-center justify-content-center mb-3"
                                    style="width:120px;height:120px;">
                                    <span class="text-white" style="font-size:3rem;font-weight:700;">
                                        {{ strtoupper(substr($buku->judul, 0, 1)) }}
                                    </span>
                                </div>
                            @endif
                            <h5 class="font-weight-bold mb-1">{{ $buku->judul }}</h5>
                            <p class="text-muted mb-2"><code>{{ $buku->isbn }}</code></p>
                        </div>
                    </div>

            <a href="{{ route('bukus.edit', $buku) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>
@endsection
