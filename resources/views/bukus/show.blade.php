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

            <a href="{{ route('bukus.edit', $buku) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>
@endsection
