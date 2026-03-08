@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">
            Silakan hubungi kami jika ada pertanyaan atau kerja sama.
        </p>
    </div>

    <div class="row">

        <!-- Form Kontak -->
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan"></textarea>
                        </div>

                        <button class="btn btn-primary">
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <!-- Informasi Kontak -->
        <div class="col-md-5">

            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="text-muted">
                        Jl. Contoh No.123<br>
                        Makassar, Indonesia
                    </p>
                </div>
            </div>

            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="fw-bold">Email</h5>
                    <p class="text-muted">
                        contact@email.com
                    </p>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="text-muted">
                        +62 812 3456 7890
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection