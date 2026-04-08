@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-5">
                <div class="login-card">

                    <h4 class="text-center mb-4">Login</h4>
                    {{-- GLOBAL ERROR --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <!-- BUTTON -->
                        <button class="btn btn-primary w-100">Login</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
