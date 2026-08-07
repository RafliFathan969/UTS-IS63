@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Peminjaman</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('peminjamans.store') }}">
                @csrf
                <div class="form-group">
                    <label>Buku</label>
                    <select name="buku_id" class="form-control @error('buku_id') is-invalid @enderror">
                        <option value="">-- Pilih Buku (stok tersedia) --</option>
                        @foreach ($bukus as $buku)
                            <option value="{{ $buku->id }}" {{ old('buku_id') == $buku->id ? 'selected' : '' }}>
                                {{ $buku->judul }} (stok: {{ $buku->stok }})
                            </option>
                        @endforeach
                    </select>
                    @error('buku_id')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" name="nama_peminjam" value="{{ old('nama_peminjam') }}" class="form-control @error('nama_peminjam') is-invalid @enderror">
                    @error('nama_peminjam')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" min="1" name="jumlah" value="{{ old('jumlah', 1) }}" class="form-control @error('jumlah') is-invalid @enderror">
                    @error('jumlah')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam', date('Y-m-d')) }}" class="form-control @error('tanggal_pinjam') is-invalid @enderror">
                    @error('tanggal_pinjam')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tanggal Kembali (opsional)</label>
                    <input type="date" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}" class="form-control @error('tanggal_kembali') is-invalid @enderror">
                    @error('tanggal_kembali')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="dipinjam" {{ old('status') == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="dikembalikan" {{ old('status') == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                        {{-- <option value="terlambat" {{ old('status') == 'terlambat' ? 'selected' : '' }}>Terlambat</option> --}}
                    </select>
                    @error('status')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('peminjamans.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
