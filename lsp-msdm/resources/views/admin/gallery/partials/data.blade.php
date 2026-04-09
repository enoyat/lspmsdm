@foreach ($gallerys as $data)
    <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">

            <img src="{{ asset('storage/gallery/' . $data->gambar) }}" class="card-img-top"
                style="height:150px; object-fit:cover;">

            <div class="card-body p-2 text-center">

                <div class="kode d-none">
                    {{ asset('storage/gallery/' . $data->gambar) }}
                </div>

                <h6 class="mb-1">{{ $data->title }}</h6>

                <small class="text-muted d-block mb-1">
                    {!! Str::limit($data->description, 40) !!}
                </small>

                <small class="d-block text-muted">
                    <i class="bi bi-check-circle"></i> {{ $data->f_aktif }}
                </small>

                <small class="d-block text-muted mb-2">
                    <i class="bi bi-tag"></i> {{ $data->kategori }}
                </small>

                {{-- BUTTON AREA --}}
                <div class="d-flex justify-content-center gap-1 flex-wrap">

                    {{-- COPY --}}
                    <button class="copybutton btn btn-success btn-sm" title="Copy Link">
                        <i class="bi bi-clipboard"></i>
                    </button>

                    {{-- EDIT --}}
                    <a href="{{ route('gallery.edit', $data->id) }}" class="btn btn-primary btn-sm" title="Edit">
                        <i class="bi bi-pencil"></i>
                    </a>

                    {{-- DELETE --}}
                    <form action="{{ route('gallery.destroy', $data->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endforeach
