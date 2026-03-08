@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Blog</h1>
        <p class="text-muted">
            Artikel terbaru seputar teknologi dan desain
        </p>
    </div>

    <!-- List Artikel -->
    <div class="row g-4">

        <!-- Artikel 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/meja.png') }}" class="card-img-top" alt="blog">
                <div class="card-body">
                    <h5 class="card-title">Belajar Laravel untuk Pemula</h5>
                    <p class="card-text">
                        Laravel adalah framework PHP yang sangat populer untuk membuat website modern.
                    </p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/meja.png') }}" class="card-img-top" alt="blog">
                <div class="card-body">
                    <h5 class="card-title">Mengenal Bootstrap</h5>
                    <p class="card-text">
                        Bootstrap membantu developer membuat tampilan website yang responsif dengan cepat.
                    </p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/meja.png') }}" class="card-img-top" alt="blog">
                <div class="card-body">
                    <h5 class="card-title">Tips Desain Website Modern</h5>
                    <p class="card-text">
                        Desain minimalis dan user experience yang baik menjadi kunci website modern.
                    </p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection