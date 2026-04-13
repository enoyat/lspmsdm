@extends('layouts.app-admin')

@section('content')
    <div class="container">

        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Edit dokumen</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('dokumen.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" value="{{ $dokumen->title }}" class="form-control"
                            placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong><br>
                        <textarea name="description" class="form-control">{{ $dokumen->description }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">File filedokumen (JPG, maksimal ukuran file 3MB, kosongkan jika tidak merubah
                            filedokumen)</label>
                        <input type="file" class="form-control" name="filedokumen" id="filedokumen"
                            placeholder="Dokumen/Berkas">
                        <label for="">File filedokumen Lama</label>
                        <input type="text" class="form-control" name="filelama" id="filelama"
                            placeholder="Dokumen/Berkas" value="{{ $dokumen->filedokumen }}" readonly="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" required>

                            <option value="">Pilih Kategori</option>
                            <option value="offline" {{ $dokumen->kategori == 'offline' ? 'selected' : '' }}>offline
                            </option>
                            <option value="online" {{ $dokumen->kategori == 'online' ? 'selected' : '' }}>online</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Aktif</strong>
                        <select name='f_aktif' id="f_aktif" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Non Aktif</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Store</button>
                </div>
            </div>

        </form>
        <br>
        <br>
        <br>
    </div>


@endsection
