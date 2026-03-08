@extends('layouts.app')

@section('content')

<div 
    class="vh-100 d-flex align-items-center text-white"
    style="
        background-image: url('{{ asset('images/jeruk2.jpg') }}');
        background-size: cover;
        background-position: center;
    "
>

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <h1 class="fw-bold">
                    Tentang Kami
                </h1>

                <p class="mt-3">
                    Kenali lebih jauh tim kreatif dan tujuan kami.
                </p>

                <p>
                    Tim kami berfokus pada pembuatan website modern,
                    minimalis, dan responsif agar memberikan pengalaman
                    terbaik bagi pengguna.
                </p>

                <p>
                    Kami menggabungkan kreativitas, teknologi,
                    dan inovasi untuk menghasilkan produk digital
                    yang menarik dan fungsional.
                </p>

                <a href="#" class="btn btn-light mt-3">
                    Selengkapnya
                </a>

            </div>

        </div>

    </div>

</div>

@endsection