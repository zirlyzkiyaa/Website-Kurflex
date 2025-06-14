@extends('layouts.main')

@section('container')

    <div class="pad-container-inovasi">
        <div class="melihat-inovasi">
            <div class="gambar-inovasi">
                <img src="/assets/image/guru/{{ $image_inovasi1 }}" alt="user" width="230px">
            </div>

            <div class="button-melihat-inovasi">
                <a href="/melihat-inovasi" class="btn btn-lihatinovasi">Melihat Inovasi</a>
            </div>
        </div>

        <div class="membuat-inovasi">
            <div class="gambar-inovasi">
                <img src="/assets/image/guru/{{ $image_inovasi2 }}" alt="user" width="230px">
            </div>

            <div class="button-membuat-inovasi">
                <a href="/membuat-inovasi" class="btn btn-buatinovasi">Membuat Inovasi</a>
            </div>
        </div>
    </div>

@endsection