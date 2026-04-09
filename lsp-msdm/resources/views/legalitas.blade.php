@extends('layouts.app')
@section('content')
    <div class="container py-5">

        <!-- ================= TENTANG ================= -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">LEGALITAS LSP MSDM Unggul Indonesia</h2>
            <p class="text-muted w-75 mx-auto">
                LSP MSDM Unggul Indonesia adalah Lembaga Sertifikasi Profesi yang bergerak di bidang
                Manajemen Sumber Daya Manusia untuk memastikan kompetensi tenaga kerja di Indonesia.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="profil-card">
                    <h5></h5>
                    <img src="{{ asset('assets/images/sk-lisensi.jpeg') }}" class="img-fluid tugas-fungsi-img">
                </div>
            </div>

            <div class="col-md-6">
                <div class="profil-card">
                    <h5></h5>
                    <img src="{{ asset('assets/images/kemkumham.jpeg') }}" class="img-fluid tugas-fungsi-img">
                </div>
            </div>


        </div>
        <div class="row g-4">

            <div class="col-md-6">
                <div class="profil-card">
                    <h5></h5>
                    <img src="{{ asset('assets/images/notaris.jpeg') }}" class="img-fluid tugas-fungsi-img">
                </div>
            </div>

            <div class="col-md-6">
                <div class="profil-card">
                    <h5>Lisensi</h5>
                    <img src="{{ asset('assets/images/sertifikat-lisensi.jpeg') }}" class="img-fluid tugas-fungsi-img">
                </div>
            </div>


        </div>
        <div class="row g-4">

            <div class="col-md-6">
                <div class="profil-card">
                    <h5></h5>
                    <img src="{{ asset('assets/images/lisensi.jpeg') }}" class="img-fluid tugas-fungsi-img">
                </div>
            </div>

            <div class="col-md-6">
                <div class="profil-card">
                   
                </div>
            </div>


        </div>
    </div>

< @endsection
