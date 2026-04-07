<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>LSP MSDM</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-elegant sticky-top">
        <div class="container">

            <!-- LOGO + NAMA -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="nav-logo me-2">
                <img src="{{ asset('assets/images/logo-BNSP-W.png') }}" alt="logo" class="nav-logo me-2">

            </a>

            <!-- TOGGLE MOBILE -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="text-white">☰</span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>

                        <ul class="dropdown-menu dropdown-elegant">
                            <li><a class="dropdown-item" href="#">Tentang LSP</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Legalitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/skema-sertifikasi') }}">SKema Sertifikasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://msdmui.nasonline.id/login" target="_blank">Sertifikasi Jarah
                            Jauh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bnsp.go.id/lsp/lsp-msdm-unggul-indonesia"
                            target="_blank">Informasi LSP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <div class="banner">
        <div class="overlay"></div>

        <div class="container position-relative">
            <div class="row align-items-center">



                <div class="col-md-12 text-center text-md-start text-white">

                    <div class="banner-tag mb-2">
                        #SERTIFIKATKOMPETENSI SDM
                    </div>

                    <h1 class="banner-title mb-2">
                        LSP MSDM UNGGUL INDONESIA
                    </h1>

                    <div class="banner-divider my-2"></div>

                    <div class="banner-sub">
                        No. Lisensi : BNSP-LSP-2177-ID <br>
                        SK : KEP.1655/BNSP/VII/2022 <br>
                        Update : KEP.772/BNSP/III/2024
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT -->
    @yield('content')
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">

                <!-- INFO LSP -->
                <div class="col-md-4 mb-3">
                    <h5>LSP MSDM UNGGUL INDONESIA</h5>
                    <p>
                        Alamat: Jl. Letda Natsir No. 07 Cikeas Nagrak Gunung Putri Bogor Jawa Barat 16962 <br>
                    </p>
                    Telpon: 0878-7473-0192 <br>
                    Email: info@lspmsdmunggulindonesia.com
                </div>

                <!-- MENU -->
                <div class="col-md-4 mb-3">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Pendaftaran</a></li>
                        <li><a href="#">Pelaksanaan</a></li>
                        <li><a href="#">Sertifikat</a></li>
                    </ul>
                </div>

                <!-- KONTAK -->
                <div class="col-md-4 mb-3">
                    <h5>Kontak</h5>
                    <p>
                        📍 Bogor, Indonesia <br>
                        📞 0878-7473-0192 <br>
                        ✉️ info@lspmsdmunggulindonesia.com
                    </p>
                </div>

            </div>

            <hr style="border-color: rgba(255,255,255,0.2)">

            <div class="text-center">
                <small>
                    © {{ date('Y') }} LSP MSDM Unggul Indonesia | All Rights Reserved
                </small>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
