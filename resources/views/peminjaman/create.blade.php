@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Tambah Peminjaman
</h1>

<form action="/peminjaman" method="POST">

    @csrf

    <div class="mb-3">
        <label>Buku</label>

        <select name="buku_id" class="form-control">

            @foreach($buku as $item)

            <option value="{{ $item->id }}">
                {{ $item->judul }}
            </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Nama Peminjam</label>

        <input type="text"
            name="nama_peminjam"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal Pinjam</label>

        <input type="date"
            name="tanggal_pinjam"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal Kembali</label>

        <input type="date"
            name="tanggal_kembali"
            class="form-control">
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection
