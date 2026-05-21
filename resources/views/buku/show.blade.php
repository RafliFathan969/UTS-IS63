@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Detail Buku
</h1>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <td>{{ $buku->id }}</td>
            </tr>

            <tr>
                <th>Kategori</th>
                <td>{{ $buku->kategori->nama_kategori }}</td>
            </tr>

            <tr>
                <th>Judul</th>
                <td>{{ $buku->judul }}</td>
            </tr>

            <tr>
                <th>Penulis</th>
                <td>{{ $buku->penulis }}</td>
            </tr>

            <tr>
                <th>Penerbit</th>
                <td>{{ $buku->penerbit }}</td>
            </tr>

            <tr>
                <th>Stok</th>
                <td>{{ $buku->stok }}</td>
            </tr>

        </table>

        <a href="/buku" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

@endsection
