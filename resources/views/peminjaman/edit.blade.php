@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Edit Peminjaman
</h1>

<form action="/peminjaman/{{ $peminjaman->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Buku</label>

        <select name="buku_id" class="form-control">

            @foreach($buku as $item)

            <option value="{{ $item->id }}"
                {{ $item->id == $peminjaman->buku_id ? 'selected' : '' }}>

                {{ $item->judul }}

            </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Nama Peminjam</label>

        <input type="text"
            name="nama_peminjam"
            class="form-control"
            value="{{ $peminjaman->nama_peminjam }}">
    </div>

    <div class="mb-3">
        <label>Tanggal Pinjam</label>

        <input type="date"
            name="tanggal_pinjam"
            class="form-control"
            value="{{ $peminjaman->tanggal_pinjam }}">
    </div>

    <div class="mb-3">
        <label>Tanggal Kembali</label>

        <input type="date"
            name="tanggal_kembali"
            class="form-control"
            value="{{ $peminjaman->tanggal_kembali }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection
