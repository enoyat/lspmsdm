@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Skema Sertifikasi</h2>
            <p class="text-muted">Daftar skema sertifikasi profesi yang tersedia di LSP MSDM UNGGUL INDONESIA</p>
        </div>

        <!-- SEARCH -->
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <input type="text" class="form-control" placeholder="Cari skema sertifikasi...">
            </div>
        </div>

        <!-- LIST SKEMA -->
        <div class="row g-4">

            <!-- ITEM -->
            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="card skema-card h-100">

                        <div class="card-body">
                            <h5 class="card-title">{{ $item['judul'] }}</h5>

                            <p class="text-muted mb-1">
                                <strong>Biaya:</strong> {{ $item['biaya'] }}
                            </p>

                            <p class="text-muted">
                                <strong>Level:</strong> {{ $item['level'] }}
                            </p>
                        </div>

                        <div class="card-footer bg-white border-0">
                            <a href="{{ url('/skema-sertifikasi-online/' . Str::slug($item['id'])) }}"
                                class="btn btn-primary w-100">Lihat Detail</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
