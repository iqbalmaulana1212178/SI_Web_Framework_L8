@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login Ngawi</h1>
                <form action="/login" method="POST">
                    {{-- terdapat Tag CSRF yang berfungsi untuk mencegah terjadi nya eksploitasi celah yaitu Cross Site Request 
                        Forgery yaitu request dari tempat lain bukan dari website itu sendiri --}}
                    @csrf
                    <img class="mb-4 d-block mx-auto" src="img\ngawis_login.jpg" alt="" width="400"
                        height="250">

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')
                        is-invalid
                        @enderror" id="email" value="{{ old('email') }}" placeholder="coba@coba.com"
                            autofocus required>
                        <label for="email">Email address</label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control " id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    
                </form>

                <small class="d-block text-center mt-3">Not Registered as Ngawi ? <a href="/register">Become a Ngawi
                        Member</a></small>
            </main>

        </div>
    </div>
@endsection
