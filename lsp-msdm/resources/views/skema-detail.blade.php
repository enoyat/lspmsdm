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
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Unit Kompetensi</h5>

                        <ul class="list-group list-group-flush">
                            @foreach ($data['unit'] as $unit)
                                <li class="list-group-item">✔ {{ $unit[0] }} - {{ $unit[1] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- SYARAT KOMPETENSI -->
                <div class="card detail-card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Syarat Pendaftaran</h5>

                        <ul class="list-group list-group-flush">
                            @foreach ($data['syarat'] as $syarat)
                                <li class="list-group-item">✔ {{ $syarat }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-md-4">

                <div class="card detail-card mb-4" style="background-color: #e5e8ec;">
                    <div class="card-body">

                        <h5 class="mb-3">Detail Skema</h5>

                        <p><strong>Metode Pelaksanaan:</strong><br>SJJ/Offline</p>

                        <p><strong>Total Unit Kompetensi:</strong><br>
                            <span class="badge bg-primary">{{ count($data['unit']) }}</span>
                        </p>
                        <p><strong>Biaya Skema:</strong><br>
                            <span class="badge bg-primary">{{ $data['biaya'] }}</span>
                        </p>
                        <p><strong>Lisensi Resmi:</strong><br>
                            <span class="badge bg-primary">BNSP-LSP-2177-ID</span>
                        </p>
                        <hr>


                    </div>
                </div>
                <div class="card detail-card" style="background-color: #c4d9f5;">
                    <div class="card-body">

                        <h5 class="mb-3">Tertarik Mengenai Skema Ini?</h5>

                        <p><strong>Daftarkan diri Anda sekarang dan buktikan kompetensi secara profesional.</p>


                        <hr>

                        <a href="#" class="btn btn-primary w-100 mb-2">
                            Daftar Sekarang
                        </a>
                        <a href="#" class="btn btn-success w-100 mb-2">
                            Tanya Lebih Lanjut
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
