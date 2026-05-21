@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Tambah Buku
</h1>

<form action="/buku" method="POST">
    @csrf
    <div class="mb-3">
        <label>Kategori</label>

        <select name="kategori_id" class="form-control">

            @foreach($kategori as $item)
            <option value="{{ $item->id }}">
                {{ $item->nama_kategori }}
            </option>
            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control">
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control">
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection
