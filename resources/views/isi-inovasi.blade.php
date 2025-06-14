@extends('layouts.main')

@section('container')

    <div class="pad-container-isi-inovasi">
        <div class="top-isi-inovasi">
            <div class="button-download-inovasi">
                 <a href="#" class="btn download-inovasi">Download</a>
            </div>

            <div class="teks-atas">
                <h2>JUDUL INOVASI</h2>
                <h5>Kata Kunci: A, B, C, dan D</h5>
                <h5>Penulis: Jane Doe</h5>
            </div>

        </div>

        <div class="content-isi-inovasi">
            <p>{{ $body }}</p>

            <br>

            <p>{{ $body }}</p>

            <br>

            <p>{{ $body }}</p>

            <br>
        </div>
    </div>

@endsection