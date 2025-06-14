@extends('layouts.main')

@section('container')

    <div class="container-awal">
        <div class="gambar-awal">
            <img src="/assets/image/awal/{{ $image }}" alt="awal" width="500px">
        </div>

        <div class="button-signup-login">
            <div class="signup-awal">
                <a href="/signup" class="btn btn-signup">Sign Up</a>
            </div>
            
            <div class="login-awal">
                <a href="/login" class="btn btn-login">Log In</a>
            </div>
        </div>
    </div>


@endsection