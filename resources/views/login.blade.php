@extends('layouts.main')

@section('container')


    <div class="gambar-login">
        <div class="gambar-login1">
            <img src="/assets/image/awal/{{ $image_login1}}" alt="login1" width="120px">
        </div>

        <div class="gambar-login2">
            <img src="/assets/image/awal/{{ $image_login2 }}" alt="login2" width="120px">
        </div>
    </div>

    <div class="pad-container-login">
        <div class="bagian-login">
            <div class="bagian-judul-login">
                <h3>Log In</h3>
            </div>

            <div class="bagian-isi-login">
                <div class="email">
                    <div class="input">
                        <form>
                            <span class="text-label">E-Mail</span>
                            <input placeholder="Masukkan alamat email">
                        </form>
                    </div>
                </div>

                <div class="password-login">
                    <div class="input">
                        <form>
                            <span class="text-label">Kata Sandi</span>
                            <input type="password" placeholder="Masukkan kata sandi">
                        </form>
                    </div>

                <div class="button-login">
                    <a href="/home" class="btn btn-login">Masuk</a>
                </div>

        </div>
    </div>
    
@endsection