@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Data Peminjaman
</h1>

<a href="/peminjaman/create"
    class="btn btn-primary mb-3">

    Tambah Peminjaman
</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Nama Peminjam</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>

    @foreach($peminjaman as $item)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->buku->judul }}</td>
        <td>{{ $item->nama_peminjam }}</td>
        <td>{{ $item->tanggal_pinjam }}</td>
        <td>{{ $item->tanggal_kembali }}</td>

        <td>
            <a href="/peminjaman/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="/peminjaman/{{ $item->id }}"
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
