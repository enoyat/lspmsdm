@extends('layouts.app-admin')

@section('content')
    <div class="container mt-5">

        <h3 class="mb-3">dokumen Infinite Scroll</h3>

        <a href="{{ route('dokumen.create') }}" class="btn btn-primary mb-4">Tambah dokumen</a>

        <div class="row" id="dokumen-container">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="dokumen-body">
                    @include('admin.dokumen.partials.data')
                </tbody>

            </table>
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

        // OBSERVER
        let observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting && !loading && hasMore) {
                loadMore();
            }
        });

        // TRIGGER
        let trigger = document.createElement('div');
        trigger.id = "scroll-trigger";
        document.querySelector('#dokumen-container').after(trigger);
        observer.observe(trigger);

        // LOAD MORE
        function loadMore() {
            if (!hasMore || loading) return;

            loading = true;
            page++;

            document.getElementById('loading').style.display = 'block';

            fetch(`?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(res => {

                    document.getElementById('dokumen-body')
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

            document.getElementById('dokumen-body').innerHTML = "";
            document.getElementById('loading').style.display = 'block';

            fetch(`?page=1&kategori=${kategori}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(res => {
                    document.getElementById('dokumen-body').innerHTML = res.html;
                    hasMore = res.hasMore;

                    document.getElementById('loading').style.display = 'none';
                });
        });
    </script>
@endsection
