@extends('layouts.main')
@section('content')
    <center>
        <div class="col-md-5 mt-5">
            <div class="position-relative">
                <div class="position-absolute top-0 start-0 end-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <img class="rounded-circle" src="https://avatars.githubusercontent.com/u/71059706?v=4" alt="" width="80">
                            <h4 class="card-title my-3">Register</h4>
                            <form class="my-login-validation" novalidate="" action="/register" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label text-start" for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Full name" name="name" required autofocus
                                        value="{{ old('name') }}">
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>

                                <div class="form-group mt-2">
                                    <label class="form-label" for="email">E-Mail Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" name="email" required value="{{ old('email') }}">
                                    <div class="invalid-feedback">
                                        Your email is invalid
                                    </div>
                                </div>

                                <div class="form-group mt-2">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" name="password" required value="{{ old('password') }}">
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group m-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <a class="text-decoration-none" href="/">login Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection
