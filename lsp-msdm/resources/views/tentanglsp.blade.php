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

        <!-- 3 CARD -->
        <div class="row g-4 mb-5">

            <div class="col-md-4">
                <div class="profil-card h-100">
                    <h5>Siapa Kami?</h5>
                    <p>
                        Kami adalah lembaga resmi yang memiliki lisensi dari BNSP untuk melaksanakan
                        sertifikasi kompetensi di bidang MSDM.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="profil-card h-100">
                    <h5>Visi</h5>
                    <p>
                        Terwujudnya Lembaga Sertifikasi Profesi yang unggul dan profesional dalam memastikan
                        SDM yang kompeten, inovatif dan berdaya saing.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="profil-card h-100">
                    <h5>Misi</h5>
                    <ol class="small">
                        <li>Melaksanakan sertifikasi kompetensi yang objektif</li>
                        <li>Menjaga mutu proses sertifikasi</li>
                        <li>Mengembangkan skema sertifikasi</li>
                        <li>Mengembangkan asesor kompetensi</li>
                        <li>Mengembangkan tata kelola LSP</li>
                        <li>Mengembangkan sistem informasi</li>
                    </ol>
                </div>
            </div>

        </div>

        <!-- ================= LEGALITAS ================= -->
        <h4 class="text-center fw-bold mb-4">Legalitas & Sekretariat</h4>

        <div class="row g-4 mb-5">

            <div class="col-md-6">
                <div class="profil-card">
                    <table class="table table-borderless small">
                        <tr>
                            <td>Nama LSP</td>
                            <td><strong>LSP MSDM Unggul Indonesia</strong></td>
                        </tr>
                         <tr>
                            <td>No. Lisensi</td>
                            <td><strong>BNSP-LSP-2177-ID</strong></td>
                        </tr>
                        <tr>
                            <td>SK Lisensi</td>
                            <td><strong>KEP.1655/BNSP/VII/2022</strong></td>
                        </tr>
                       
                        <tr>
                            <td>Tanggal SK</td>
                            <td><strong>19 Agustus 2022</strong></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku</td>
                            <td><strong>19 Agustus 2027</strong></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="profil-card">
                    <table class="table table-borderless small">
                        <tr>
                            <td>Alamat</td>
                            <td><strong>Kampus 2 STIE IPWIJA, Bogor</strong></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td><strong>087874730192</strong></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><strong>lspmsdmp3.ui@gmail.com</strong></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
       
        <!-- ================= STRUKTUR ================= -->
        <h4 class="text-center fw-bold mb-4">Struktur Organisasi</h4>

        <div class="text-center mb-5">
            <img src="{{ asset('assets/images/struktur-organisasi.png') }}" class="img-fluid struktur-img">
        </div>

        <!-- ================= TUGAS ================= -->
        <h4 class="text-center fw-bold mb-4">Tugas Fungsi & Wewenang LSP</h4>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="profil-card">
                    <h5>Tugas & Fungsi</h5>
                    <ul>
                        <li>Menyusun dan mengembangkan skema sertifikasi</li>
                        <li>Membuat perangkat asesmen</li>
                        <li>Menyediakan asesor</li>
                        <li>Melaksanakan sertifikasi</li>
                        <li>Surveilans sertifikasi</li>
                        <li>Menetapkan persyaratan</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="profil-card">
                    <h5>Wewenang LSP</h5>
                    <ul>
                        <li>Menerbitkan sertifikat kompetensi</li>
                        <li>Mencabut sertifikat</li>
                        <li>Memberikan sanksi</li>
                        <li>Mengusulkan skema</li>
                        <li>Menetapkan biaya uji</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection
