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
                        <strong>No. SK Lisensi SJJ :</strong> KEP.0772/BNSP/III/2024
                    </p>
                </div>

            </div>
        </div>

        <div class="container mt-5">

            <!-- INFO GRAFIS -->
            <div class="text-center mb-4">
                <h4 class="py-3 fw-bold" style="background-color:#c9d6e3;">
                    INFO GRAFIS
                </h4>
            </div>

            <div class="row text-center">

                <div class="col-md-3 mb-4">
                    <div class="card text-white shadow-lg info-card">
                        <div class="card-body py-5">
                            <h5 class="mb-3">Asesi Offline</h5>
                            <h1 class="fw-bold display-4">
                                {{ $infografis['asesiOffline'] ?? 1000 }}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-white shadow-lg info-card">
                        <div class="card-body py-5">
                            <h5 class="mb-3">Asesi On-line</h5>
                            <h1 class="fw-bold display-4">
                                {{ $infografis['asesiOnline'] ?? 1000 }}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-white shadow-lg info-card">
                        <div class="card-body py-5">
                            <h5 class="mb-3">Skema</h5>
                            <h1 class="fw-bold display-4">
                                {{ $infografis['skema'] ?? 5 }}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-white shadow-lg info-card">
                        <div class="card-body py-5">
                            <h5 class="mb-3">TUK</h5>
                            <h1 class="fw-bold display-4">
                                {{ $infografis['tuk'] ?? 100 }}
                            </h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- PENDAFTARAN -->
        <div class="container py-5">

            <h5 class="text-center fw-bold mb-4 section-title">
                TAHAP PENDAFTARAN UJI KOMPETENSI
            </h5>

            <div class="row g-4">

                <!-- OFFLINE -->
                <div class="col-md-6">
                    <div class="alur-card h-100 text-center">

                        <div class="alur-label">OFFLINE</div>

                        <div class="alur-image">
                            <img src="{{ asset('assets/images/alur-daftar-offline.jpeg') }}" alt="pendaftaran offline">
                        </div>

                    </div>
                </div>

                <!-- ONLINE -->
                <div class="col-md-6">
                    <div class="alur-card h-100 text-center">

                        <div class="alur-label">ONLINE</div>

                        <div class="alur-image">
                            <img src="{{ asset('assets/images/alur-daftar-online.jpeg') }}" alt="pendaftaran online">
                        </div>

                    </div>
                </div>

            </div>

        </div>


        <!-- PELAKSANAAN -->

        <div class="container py-5">

            <h5 class="text-center fw-bold mb-4 section-title">
                TAHAP PELAKSANAAN UJI KOMPETENSI
            </h5>

            <div class="row g-4">

                <!-- OFFLINE -->
                <div class="col-md-6">
                    <div class="alur-card h-100 text-center">

                        <div class="alur-label">OFFLINE</div>

                        <div class="alur-image">
                            <img src="{{ asset('assets/images/alur-sertifikasi-offline.jpeg') }}" alt="pelaksanaan offline">
                        </div>

                    </div>
                </div>

                <!-- ONLINE -->
                <div class="col-md-6">
                    <div class="alur-card h-100 text-center">

                        <div class="alur-label">ONLINE</div>

                        <div class="alur-image">
                            <img src="{{ asset('assets/images/alur-sertifikasi-online.jpeg') }}" alt="pelaksanaan online">
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- CAROUSEL -->
    <div class="container my-5">
        <div id="carouselLSP" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- INDICATOR -->
            <div class="carousel-indicators">
                @foreach ($carousel as $key => $slider)
                    <button type="button" data-bs-target="#carouselLSP" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}">
                    </button>
                @endforeach
            </div>

            <!-- SLIDES -->
            <div class="carousel-inner rounded shadow">
                @foreach ($carousel as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/gallery/' . $slider->gambar) }}" class="d-block w-100 carousel-img"
                            alt="slide{{ $key }}">
                    </div>
                @endforeach
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
                @foreach ($gallerys as $gallery)
                    <div class="thumb-item">
                        <img src="{{ asset('storage/gallery/' . $gallery->gambar) }}" onclick="showImage(this.src)">
                    </div>
                @endforeach


            </div>

        </div>
    </div>
    <!-- MODAL IMAGE -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">

                <div class="modal-body text-center p-0">
                    <img id="modalImage" class="img-fluid rounded">
                </div>

            </div>
        </div>
    </div>

    <a href="https://wa.me/6287874730192" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <script>
        function showImage(src) {
            const modalImg = document.getElementById('modalImage');
            modalImg.src = src;

            let modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        }
    </script>
@endsection
