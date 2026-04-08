@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h3 class="text-center mb-4">Gallery</h3>

        <div class="row">
            @foreach ($gallerys as $key => $item)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/gallery/' . $item->gambar) }}" class="card-img-top gallery-thumb"
                            data-bs-toggle="modal" data-bs-target="#galleryModal" data-index="{{ $key }}"
                            style="cursor:pointer; height:200px; object-fit:cover;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark">

                <div class="modal-body p-0">

                    <div id="carouselGallery" class="carousel slide" data-bs-ride="false">

                        <div class="carousel-inner">
                            @foreach ($gallerys as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/gallery/' . $item->gambar) }}" class="d-block w-100"
                                        style="max-height:80vh; object-fit:contain;">
                                </div>
                            @endforeach
                        </div>

                        <!-- CONTROL -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById('galleryModal');
            const carousel = document.querySelector('#carouselGallery');

            modal.addEventListener('show.bs.modal', function(event) {
                let index = event.relatedTarget.getAttribute('data-index');
                let carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
                carouselInstance.to(index);
            });
        });
    </script>
@endsection
