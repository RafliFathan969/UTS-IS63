@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Tambah Kategori
</h1>

<form action="/kategori" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama Kategori</label>

        <input type="text"
            name="nama_kategori"
            class="form-control">
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection
