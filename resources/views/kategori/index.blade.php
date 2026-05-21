@extends('layout.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Data Kategori</h1>

<a href="/kategori/create" class="btn btn-primary mb-3">
    Tambah Kategori
</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach($kategori as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_kategori }}</td>
        <td>
            <a href="/kategori/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="/kategori/{{ $item->id }}"
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
