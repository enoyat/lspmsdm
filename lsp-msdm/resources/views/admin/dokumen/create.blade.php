@extends('layouts.app-admin')

@section('content')
    <div class="container">

        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Upload dokumen</h2>
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

        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" value="" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                        <input type="description" name="description" value="" class="form-control"
                            placeholder="description">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">File filedokumen (JPG, maksimal ukuran file 3MB)</label>
                        <input type="file" class="form-control" name="filedokumen" id="filedokumen"
                            placeholder="Dokumen/Berkas">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            <option value="offline">offline</option>
                            <option value="online">online</option>
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
