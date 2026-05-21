@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Dashboard Perpustakaan
</h1>

<div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">

            <div class="card-body">

                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Kategori
                        </div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $kategori }}
                        </div>

                    </div>

                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">

            <div class="card-body">

                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Buku
                        </div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $buku }}
                        </div>

                    </div>

                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">

            <div class="card-body">

                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Peminjaman
                        </div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $peminjaman }}
                        </div>

                    </div>

                    <div class="col-auto">
                        <i class="fas fa-book-open fa-2x text-gray-300"></i>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection
