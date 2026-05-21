@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Detail Kategori
</h1>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <td>{{ $kategori->id }}</td>
            </tr>

            <tr>
                <th>Nama Kategori</th>
                <td>{{ $kategori->nama_kategori }}</td>
            </tr>

        </table>

        <a href="/kategori" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

@endsection
