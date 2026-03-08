@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Gallery</h1>
        <p class="text-muted">
            Beberapa hasil karya dan dokumentasi kami
        </p>
    </div>

    <!-- Grid Gallery -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table4.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table4.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table4.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table5.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table5.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('images/table5.png') }}" 
                     class="img-fluid rounded"
                     alt="gallery">
            </div>
        </div>

    </div>

</div>

@endsection