@foreach ($dokumens as $data)
    <tr>
        {{-- GAMBAR --}}
        <td class="text-center">
            <a href="{{ asset('storage/dokumen/' . $data->filedokumen) }}" target="_blank">
                {{ $data->filedokumen }}
            </a>
        </td>

        {{-- JUDUL --}}
        <td>{{ $data->title }}</td>

        {{-- DESKRIPSI --}}
        <td>{!! Str::limit($data->description, 40) !!}</td>

        {{-- STATUS --}}
        <td class="text-center">
            <i class="bi bi-check-circle"></i> {{ $data->f_aktif }}
        </td>

        <td class="text-center">
            <i class="bi bi-check-circle"></i> {{ $data->kategori }}
        </td>

        {{-- AKSI --}}
        <td class="text-center">
            <div class="d-flex justify-content-center gap-1">

                {{-- EDIT --}}
                <a href="{{ route('dokumen.edit', $data->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>

                {{-- DELETE --}}
                <form action="{{ route('dokumen.destroy', $data->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>

            </div>
        </td>
    </tr>
@endforeach
