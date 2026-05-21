@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Edit Kategori
</h1>

<form action="/kategori/{{ $kategori->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Kategori</label>

        <input type="text"
            name="nama_kategori"
            class="form-control"
            value="{{ $kategori->nama_kategori }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection
