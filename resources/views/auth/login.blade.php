@extends('layouts.main')
@section('content')
    <center>
        <div class="col-md-5 mt-5">
            <div class="position-relative">
                <div class="position-absolute top-0 start-0 end-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <img class="rounded-circle" src="https://avatars.githubusercontent.com/u/71059706?v=4" alt="" width="80">
                            <h4 class="card-title my-3">Login</h4>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- untuk pesan login error --}}
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            <form action="/login" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror "
                                        placeholder="Email" name="email" required autofocus value="{{ old('email') }}">
                                    <div class="input-group-append">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                    <div class="input-group-append">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <a class="text-decoration-none" href="/register">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection
