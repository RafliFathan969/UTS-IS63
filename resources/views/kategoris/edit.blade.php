@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Edit Kategori</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('kategoris.update', $kategori) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                           class="form-control @error('nama_kategori') is-invalid @enderror">
                    @error('nama_kategori')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
