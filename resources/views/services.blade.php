@extends('layouts.app')

@section('content')

<div
    class="vh-100 d-flex align-items-center justify-content-center"
    style="
        background-image: url('{{ asset('images/yell2.jpg') }}');
        background-size: cover;
        background-position: center;
    "
>

    <div class="container py-5">

        <div class="text-center mb-5 text-white">
            <h1 class="fw-bold">Layanan Kami</h1>

            <p>
                Beberapa layanan yang kami tawarkan untuk membantu bisnis Anda berkembang.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <x-card>

                    <i class="bi bi-laptop display-4 mb-3"></i>

                    <h4 class="fw-bold">Web Development</h4>

                    <p class="text-muted">
                        Kami membuat website modern, cepat, dan responsif
                        menggunakan teknologi terbaru.
                    </p>

                </x-card>
            </div>

            <div class="col-md-4">
                <x-card>

                    <i class="bi bi-phone display-4 mb-3"></i>

                    <h4 class="fw-bold">UI / UX Design</h4>

                    <p class="text-muted">
                        Desain antarmuka yang menarik dan mudah digunakan
                        untuk meningkatkan pengalaman pengguna.
                    </p>

                </x-card>
            </div>

            <div class="col-md-4">
                <x-card>

                    <i class="bi bi-graph-up display-4 mb-3"></i>

                    <h4 class="fw-bold">Digital Marketing</h4>

                    <p class="text-muted">
                        Strategi pemasaran digital untuk meningkatkan
                        visibilitas dan pertumbuhan bisnis Anda.
                    </p>

                </x-card>
            </div>

        </div>

    </div>

</div>

@endsection