@extends('layouts.base_html')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('main')

    <body class="app app-login p-0">
        <div class="center">

            <div class="card position-relative top-50 start-50 translate-middle" style="width:400px;">
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-body d-flex flex-column ">

                    <h2 class="auth-heading text-center mb-3">Login as Admin</h2>
                    <div class="auth-form-container text-start p-2">
                        <form class="auth-form login-form" action="/login" method="post">
                            @csrf
                            <div class="form-email mb-3">
                                <input id="email" name="email" type="email"
                                    class="form-control email @error('email') is-invalid @enderror"
                                    placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                <label class="sr-only" for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--//form-group-->
                            <div class="form-password mb-3">
                                <input id="password" name="password" type="password"
                                    class="form-control signin-password @error('password') is-invalid @enderror"
                                    placeholder="password" required>
                                <label class="sr-only" for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--//form-group-->
                            <div class="text-center mb-2">
                                <button type="submit" id="login"
                                    class="btn app-btn-primary w-100 theme-btn bg-danger btn-dark border-0 mx-auto">Login</button>
                            </div>
                            <div class="text-center mb-2">
                                <a id="back" href="/"
                                    class="btn app-btn-primary w-100 theme-btn bg-success btn-dark border-0 mx-auto">Back</a>
                            </div>
                        </form>
                        <!--//auth-form-container-->
                    </div>
                </div>
            </div>
            <!--//row-->
    </body>
@endsection
