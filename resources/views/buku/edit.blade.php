@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Edit Buku
</h1>

<form action="/buku/{{ $buku->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Kategori</label>

        <select name="kategori_id" class="form-control">

            @foreach($kategori as $item)

            <option value="{{ $item->id }}"
                {{ $item->id == $buku->kategori_id ? 'selected' : '' }}>

                {{ $item->nama_kategori }}

            </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text"
            name="judul"
            class="form-control"
            value="{{ $buku->judul }}">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text"
            name="penulis"
            class="form-control"
            value="{{ $buku->penulis }}">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text"
            name="penerbit"
            class="form-control"
            value="{{ $buku->penerbit }}">
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number"
            name="stok"
            class="form-control"
            value="{{ $buku->stok }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection
