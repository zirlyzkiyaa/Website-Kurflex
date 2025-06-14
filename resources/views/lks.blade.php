@extends('layouts.main')

@section('container')


<div class="konten">
    <div class="pad-container1">
        <div class="contoh-soal">
            <div class="gambar-guru-contohsoal">
                <img src="/assets/image/guru/{{ $image_contohsoal }}" alt="contoh soal" width="250px">
            </div>

            <div class="lks-contohsoal">
                <a href="/lks-contoh-soal" class="btn btn-contohsoal">Contoh Soal</a>
            </div>
        </div>
    </div>

    <div class="pad-container2">
        <div class="buat-soal">
            <div class="gambar-guru-buatsoal">
                <img src="/assets/image/guru/{{ $image_buatsoal }}" alt="buat soal" width="200px">
            </div>

            <div class="lks-buatsoal">
                <a href="/lks-membuat-soal" class="btn btn-buatsoal">Buat Soal</a>
            </div>
        </div>
    </div>
</div>
    

@endsection