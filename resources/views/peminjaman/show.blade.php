@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Detail Peminjaman
</h1>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>Judul Buku</th>
                <td>{{ $peminjaman->buku->judul }}</td>
            </tr>

            <tr>
                <th>Nama Peminjam</th>
                <td>{{ $peminjaman->nama_peminjam }}</td>
            </tr>

            <tr>
                <th>Tanggal Pinjam</th>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
            </tr>

            <tr>
                <th>Tanggal Kembali</th>
                <td>{{ $peminjaman->tanggal_kembali }}</td>
            </tr>

        </table>

        <a href="/peminjaman" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

@endsection
