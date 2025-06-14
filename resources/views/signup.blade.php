@extends('layouts.main')

@section('container')

    <div class="pad-container">
        <div class="awal-guru">
            <div class="gambar-awal-guru">
                <img src="/assets/image/awal/{{ $image_guru }}" alt="sign up guru" width="250px">
            </div>

            <div class="signup-guru-siswa">
                <a href="/signup-guru" class="btn btn-signup-guru">Guru</a>
            </div>
        </div>

        <div class="awal-siswa">
            <div class="gambar-awal-siswa">
                <img src="/assets/image/awal/{{ $image_siswa }}" alt="sign up siswa" width="250px">
            </div>

            <div class="signup-guru-siswa">
                <a href="/signup-siswa" class="btn btn-signup-siswa">Siswa</a>
            </div>
        </div>
    </div>
    

@endsection