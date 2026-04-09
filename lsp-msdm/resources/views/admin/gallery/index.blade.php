@extends('layouts.app-admin')

@section('content')
    <div class="container mt-5">

        <h3 class="mb-3">Gallery Infinite Scroll</h3>
        <div class="row mb-3">
            <div class="col-md-4">
                <select id="filter-kategori" class="form-select">
                    <option value="">-- Semua Kategori --</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori }}">{{ $kategori }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-4">Tambah Gallery</a>

        <div class="row" id="gallery-container">
            @include('admin.gallery.partials.data')
        </div>

        {{-- Loader --}}
        <div class="text-center my-4" id="loading" style="display:none;">
            <span>Loading...</span>
        </div>

    </div>

    <script>
        let page = 1;
        let loading = false;
        let hasMore = true;
        let kategori = "";

        // OBSERVER
        let observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting && !loading && hasMore) {
                loadMore();
            }
        });

        // TRIGGER
        let trigger = document.createElement('div');
        trigger.id = "scroll-trigger";
        document.querySelector('#gallery-container').after(trigger);
        observer.observe(trigger);

        // LOAD MORE
        function loadMore() {
            if (!hasMore || loading) return;

            loading = true;
            page++;

            document.getElementById('loading').style.display = 'block';

            fetch(`?page=${page}&kategori=${kategori}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(res => {

                    document.getElementById('gallery-container')
                        .insertAdjacentHTML('beforeend', res.html);

                    hasMore = res.hasMore;

                    // refresh observer
                    observer.unobserve(trigger);
                    observer.observe(trigger);

                    if (!hasMore) {
                        document.getElementById('loading').innerHTML = "Semua data sudah tampil";
                    } else {
                        document.getElementById('loading').style.display = 'none';
                    }

                    loading = false;
                })
                .catch(() => {
                    loading = false;
                });
        }

        // FILTER
        document.getElementById('filter-kategori').addEventListener('change', function() {
            kategori = this.value;

            // RESET
            page = 1;
            hasMore = true;
            loading = false;

            document.getElementById('gallery-container').innerHTML = "";
            document.getElementById('loading').style.display = 'block';

            fetch(`?page=1&kategori=${kategori}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(res => {
                    document.getElementById('gallery-container').innerHTML = res.html;
                    hasMore = res.hasMore;

                    document.getElementById('loading').style.display = 'none';
                });
        });

        // COPY BUTTON
        document.addEventListener("click", function(e) {
            if (e.target.closest(".copybutton")) {
                let card = e.target.closest(".card");
                let data = card.querySelector(".kode").innerText;
                navigator.clipboard.writeText(data);
                alert("Copy link sukses");
            }
        });
    </script>
@endsection
