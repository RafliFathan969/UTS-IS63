@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Buku</h1>

    <div class="card shadow mb-2">
        <div class="card-body">
            <form method="POST" action="{{ route('bukus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" value="{{ old('judul') }}"
                        class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" value="{{ old('penulis') }}"
                        class="form-control @error('penulis') is-invalid @enderror">
                    @error('penulis')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" value="{{ old('penerbit') }}"
                        class="form-control @error('penerbit') is-invalid @enderror">
                    @error('penerbit')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" min="0" name="stok" value="{{ old('stok', 0) }}"
                        class="form-control @error('stok') is-invalid @enderror">
                    @error('stok')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                            <div class="form-group">
                                <label>Foto Buku</label>
                                <div class="text-center mb-3">
                                    <img id="preview-gambar" src="{{ asset('vendor/startbootstrap-sb-admin-2/img/undraw_profile.svg') }}"
                                        class="img-thumbnail rounded" width="150" height="150" style="object-fit:cover">
                                </div>
                                <input type="file" name="gambar" id="gambar" accept="image/jpg,image/jpeg,image/png"
                                    class="form-control-file {{ $errors->has('gambar') ? 'is-invalid' : '' }}"
                                    onchange="previewGambar(this)">
                                <small class="form-text text-muted">
                                    Format: JPG/PNG. Maks: 2MB.
                                </small>
                                @error('gambar')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
