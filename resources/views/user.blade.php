@extends('layouts.main')

@section('container')

    <div class="pad-container-user">
        <div class="gambar-user">
            <img src="/assets/image/user/{{ $image_user }}" alt="user" width="130px">
        </div>

        <div class="bagian-user">
                <div class="nama-lengkap">
                    <div class="input-user" id="nama_lengkap">
                        <form>
                            <span class="text-label">Nama Lengkap</span>
                            <input placeholder=" ">
                        </form>
                    </div>
                </div>

                <div class="nip">
                    <div class="input-user">
                        <form>
                            <span class="text-label">NIP</span>
                            <input placeholder=" "> 
                        </form>
                    </div>
                </div>

                <div class="bidjar">
                    <div class="input-user">
                        <form>
                            <span class="text-label">Bidang Ajar</span>
                            <input placeholder=" ">
                        </form>
                    </div>
                </div>

                <div class="email">
                    <div class="input-user">
                        <span class="text-label">E-Mail</span>
                        <input placeholder=" ">
                    </div>
                </div>

                <div class="password-user">
                    <div class="input-user">
                        <span class="text-label">Kata Sandi</span>
                        <input type="password" placeholder=" ">
                    </div>
                </div>

                <div class="button-logout">
                    <a href="/" class="btn btn-logout">Log Out</a>
                </div>
        </div>
    </div>
    
@endsection