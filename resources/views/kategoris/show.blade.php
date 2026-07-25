@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Kategori</h1>
        <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th style="width:200px">Nama Kategori</th>
                    <td>{{ $kategori->nama_kategori }}</td>
                </tr>
                <tr>
                    <th>Jumlah Buku</th>
                    <td>{{ $kategori->bukus_count }} buku</td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ $kategori->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui</th>
                    <td>{{ $kategori->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>

            <a href="{{ route('kategoris.edit', $kategori) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>
@endsection
