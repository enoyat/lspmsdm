@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- HEADER -->
        <div class="header mb-4">
            <div class="row align-items-center">

                <!-- LOGO -->
                <div class="col-md-3 text-center mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/logo-besar.jpg') }}" alt="Logo LSP" class="img-fluid logo-header">
                </div>

                <!-- TEXT -->
                <div class="col-md-9 text-center text-md-start">
                    <h2 class="logo-title mb-2">LSP MSDM UNGGUL INDONESIA</h2>

                    <p class="mb-0">
                        <strong>No. Lisensi :</strong> BNSP-LSP-2177-ID <br>
                        <strong>No. SK Lisensi :</strong> KEP.1655/BNSP/VII/2022 <br>
                        <strong>No. SK Lisensi :</strong> KEP.772/BNSP/III/2024
                    </p>
                </div>

            </div>
        </div>

        <!-- PENDAFTARAN -->
        <h5 class="section-title text-center mb-3">
            TAHAP PENDAFTARAN UJI KOMPETENSI
        </h5>

        <div class="row g-4 text-center mb-4">
            <div class="col-md-6">
                <p class="fw-bold">OFFLINE</p>
                <div class="card-box">
                    <img src="{{ asset('assets/images/feature.jpg') }}" class="img-fluid" alt="pendaftaran offline">
                </div>
            </div>

            <div class="col-md-6">
                <p class="fw-bold">ONLINE</p>
                <div class="card-box">
                    <img src="{{ asset('assets/images/feature.jpg') }}" class="img-fluid" alt="pendaftaran online">
                </div>
            </div>
        </div>

        <!-- PELAKSANAAN -->
        <h5 class="section-title text-center mb-3">
            TAHAP PELAKSANAAN UJI KOMPETENSI
        </h5>

        <div class="row g-4 text-center">
            <div class="col-md-6">
                <p class="fw-bold">OFFLINE</p>
                <div class="card-box">
                    <img src="{{ asset('assets/images/feature.jpg') }}" class="img-fluid" alt="pelaksanaan offline">
                </div>
            </div>

            <div class="col-md-6">
                <p class="fw-bold">ONLINE</p>
                <div class="card-box">
                    <img src="{{ asset('assets/images/feature.jpg') }}" class="img-fluid" alt="pelaksanaan online">
                </div>
            </div>
        </div>

    </div>
    <!-- CAROUSEL -->
    <div class="container my-5">
        <div id="carouselLSP" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- INDICATOR -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselLSP" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselLSP" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselLSP" data-bs-slide-to="2"></button>
            </div>

            <!-- SLIDES -->
            <div class="carousel-inner rounded shadow">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100 carousel-img" alt="slide1">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slide2.jpg') }}" class="d-block w-100 carousel-img" alt="slide2">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slide3.jpg') }}" class="d-block w-100 carousel-img" alt="slide3">
                </div>

            </div>

            <!-- CONTROL -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLSP" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselLSP" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
    <!-- THUMB CAROUSEL -->
    <div class="thumb-carousel py-4">
        <div class="container overflow-hidden">

            <div class="thumb-track">

                <!-- ITEM (ulang 2x untuk loop) -->
                @for ($i = 0; $i < 2; $i++)
                    <div class="thumb-item">
                        <img src="{{ asset('assets/images/slide1.jpg') }}">
                    </div>
                    <div class="thumb-item">
                        <img src="{{ asset('assets/images/slide2.jpg') }}">
                    </div>
                    <div class="thumb-item">
                        <img src="{{ asset('assets/images/slide3.jpg') }}">
                    </div>
                    <div class="thumb-item">
                        <img src="{{ asset('assets/images/slide4.jpg') }}">
                    </div>
                    <div class="thumb-item">
                        <img src="{{ asset('assets/images/slide5.jpg') }}">
                    </div>
                @endfor

            </div>

        </div>
    </div>
@endsection
