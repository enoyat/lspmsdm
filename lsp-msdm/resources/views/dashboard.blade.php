@extends('layouts.app-admin')

@section('content')
    <div class="container py-4">

        <h1 class="text-center mb-4">Dashboard Admin</h1>

        <div class="row g-4">

            <!-- UJI KOMPETENSI -->
            <div class="col-md-6">
                <a href="{{ route('gallery.index') }}" class="card h-100 text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <h5 class="card-title">GALLERY</h5>
                        <p class="card-text">Kelola data gallery, termasuk foto, video, dan deskripsi.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row g-4">

            <!-- UJI KOMPETENSI -->
            <div class="col-md-6">
                <a href="{{ route('dokumen.index') }}" class="card h-100 text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <h5 class="card-title">DOKUMEN SERTIFIKAT</h5>
                        <p class="card-text">Kelola data dokumen sertifikat, termasuk upload dan pengelolaan.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
