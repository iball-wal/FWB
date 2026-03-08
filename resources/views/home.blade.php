@extends('layouts.app')

@section('content')
<div 
    class="vh-100 d-flex align-items-center justify-content-center text-center text-white"
    style="
        background-image: url('{{ asset('images/jeruk1.jpg') }}');
        background-size: cover;
        background-position: center;">
    <div>
        <h1 class="display-2 fw-bold">
            CREATIVE DESIGN
        </h1>

        <p class="lead">
            Enigma is a Creative Minimal Style Onepage.
            It is Fully Responsive and Retina Ready.
        </p>

        <div class="mt-4">
            <x-button>
            Learn More
            </x-button>

            <x-button>
            Purchase It
            </x-button>
            
        </div>
    </div>
</div>
@endsection