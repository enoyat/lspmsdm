@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <!-- HEADER -->
        <div class="mb-4">
            <h2 class="fw-bold">{{ $data['judul'] }}</h2>
            <p class="text-muted">Detail Skema Sertifikasi</p>
        </div>

        <div class="row g-4">

            <!-- LEFT CONTENT -->
            <div class="col-md-8">

                <!-- DESKRIPSI -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Deskripsi</h5>
                        <p>{{ $data['deskripsi'] }}</p>
                    </div>
                </div>

                <!-- UNIT KOMPETENSI -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="mb-3">Unit Kompetensi</h5>

                        <ul class="list-group list-group-flush">
                            @foreach ($data['unit'] as $unit)
                                <li class="list-group-item">✔ {{ $unit }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-md-4">

                <div class="card detail-card">
                    <div class="card-body">

                        <h5 class="mb-3">Informasi Skema</h5>

                        <p><strong>Kode:</strong><br> {{ $data['kode'] }}</p>

                        <p><strong>Level:</strong><br>
                            <span class="badge bg-primary">{{ $data['level'] }}</span>
                        </p>

                        <hr>

                        <a href="#" class="btn btn-success w-100 mb-2">
                            Daftar Sekarang
                        </a>

                        <a href="{{ url('/skema-sertifikasi') }}" class="btn btn-outline-secondary w-100">
                            Kembali
                        </a>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
