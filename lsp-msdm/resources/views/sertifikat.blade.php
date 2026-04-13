@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h5 class="text-center fw-bold mb-4 section-title">
            LAPORAN PERIODIK PENERBITAN SERTIFIKAT
        </h5>
        <div class="row">
            <h5 class="text-center fw-bold mb-4 section-title bg-primary text-white py-2">
                PENERBITAN SERTIFIKAT UJK OFFLINE
            </h5>

            <div class="row">
                @foreach ($offline as $item)
                    <div class="col-md-2 col-5 mb-3 text-center">

                        <a href="{{ asset('storage/dokumen/' . $item->filedokumen) }}" target="_blank"
                            class="text-decoration-none">

                            {{-- ICON EXCEL --}}
                            <div class="p-3 bg-light rounded shadow-sm d-inline-block">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732220.png" alt="Excel"
                                    style="width:80px;">
                            </div>

                            {{-- TITLE --}}
                            <div class="mt-2">
                                <span class="badge bg-primary px-3 py-2">
                                    {{ $item->title }}
                                </span>
                            </div>

                        </a>

                    </div>
                @endforeach
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-center mt-4">
                {{ $offline->links() }}
            </div>
        </div>
        <div class="row">
            <h5 class="text-center fw-bold mb-4 section-title bg-primary text-white py-2">
                PENERBITAN SERTIFIKAT UJK ONLINE
            </h5>

            <div class="row">
                @foreach ($online as $item)
                    <div class="col-md-2 col-5 mb-3 text-center">

                        <a href="{{ asset('storage/dokumen/' . $item->filedokumen) }}" target="_blank"
                            class="text-decoration-none">

                            {{-- ICON EXCEL --}}
                            <div class="p-3 bg-light rounded shadow-sm d-inline-block">
                                <img src="https://cdn-icons-png.flaticon.com/512/732/732220.png" alt="Excel"
                                    style="width:80px;">
                            </div>

                            {{-- TITLE --}}
                            <div class="mt-2">
                                <span class="badge bg-primary px-3 py-2">
                                    {{ $item->title }}
                                </span>
                            </div>

                        </a>

                    </div>
                @endforeach
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-center mt-4">
                {{ $online->links() }}
            </div>
        </div>
    </div>
@endsection
