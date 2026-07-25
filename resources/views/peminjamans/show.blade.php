@extends('layouts.app')

@section('title', 'Detail Peminjaman')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Peminjaman</h1>
        <a href="{{ route('peminjamans.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th style="width:200px">Nama Peminjam</th>
                    <td>{{ $peminjaman->nama_peminjam }}</td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td>{{ $peminjaman->buku->judul }}</td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td>{{ $peminjaman->buku->penulis }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $peminjaman->buku->kategori->nama_kategori }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>{{ $peminjaman->jumlah }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td>{{ $peminjaman->tanggal_pinjam->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td>{{ $peminjaman->tanggal_kembali?->format('d-m-Y') ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @php
                            $badge = match($peminjaman->status) {
                                'dipinjam' => 'badge-warning',
                                'dikembalikan' => 'badge-success',
                                'terlambat' => 'badge-danger',
                            };
                        @endphp
                        <span class="badge {{ $badge }}">{{ ucfirst($peminjaman->status) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ $peminjaman->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>

            <a href="{{ route('peminjamans.edit', $peminjaman) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>
@endsection
