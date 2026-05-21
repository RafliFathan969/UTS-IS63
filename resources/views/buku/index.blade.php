@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

<a href="/buku/create" class="btn btn-primary mb-3">
    Tambah Buku
</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($buku as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kategori->nama_kategori }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->penulis }}</td>
        <td>{{ $item->penerbit }}</td>
        <td>{{ $item->stok }}</td>

        <td>
            <a href="/buku/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="/buku/{{ $item->id }}"
                method="POST"
                style="display:inline">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection
