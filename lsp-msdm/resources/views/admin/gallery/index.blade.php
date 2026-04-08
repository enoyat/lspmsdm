@extends('layouts.app-admin')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-lg-12 margin-tb">
                    <div class="float-left">
                        <h2> gallerys</h2>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-success" href="{{ route('gallery.create') }}"> Create gallerys</a>
                    </div>
                </div>
            </div>
            <hr>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table>
                <?php $i = 0; ?>
                @foreach ($gallerys as $data)
                    <div class="listmedia"
                        style="width: 200px; display: inline-block; border: solid 1px; padding: 5px; text-align: center;">

                        <img src="{{ asset('storage/gallery/' . $data->gambar) }}" class="thumbnail img-responsive"
                            alt="{{ $data->title }}" />
                        <div id='kode' style="font-size: 8px; display: none;">
                            {{ asset('storage/gallery/' . $data->gambar) }}</div>
                        {{ $data->title }}<br>
                        {!! $data->description !!}<br>
                        Status: {{ $data->f_aktif }}<br>
                        Kategori: {{ $data->kategori }} <br>

                        <div class="copybutton btn btn-xs btn-success" style="display: inline-block; width: 80px;">Copy Link
                        </div>
                        <div style="display: inline-block;">
                            <form action="{{ route('gallery.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary btn-xs" href="{{ route('gallery.edit', $data->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger btn-xs"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus media ini?')">Delete</button>
                            </form>
                        </div>

                    </div>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center;"> {{ $gallerys->links('vendor.pagination.default') }}</div>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabelku').DataTable();
            });
        </script>
        <script type="text/javascript">
            $(document).on('click', '.copybutton', function() {
                var data = $(this).closest('.listmedia').find('#kode').text();
                navigator.clipboard.writeText(data);
                alert('copy link sukses');
            });
        </script>
    </div>
@endsection
