@extends('layouts.main')

@section('container')

    <div class="pad-container-guru-siswa">
        <div class="kiri-guru">
            <div class="gambar-signup-guru">
                <img src="/assets/image/awal/{{ $image_signup_guru }}" alt="register guru" width="400px">
            </div>
        </div>

        <div class="kanan-guru">
            <div class="bagian-judul">
                <h3>Registrasi Guru</h3>
            </div>

            <div class="bagian-isi">
                <div class="nama-lengkap">
                    <div class="input" id="nama_lengkap">
                        <form>
                            <span class="text-label">Nama Lengkap</span>
                            <input placeholder="Masukkan Nama Lengkap">
                        </form>
                    </div>
                </div>

                <div class="nip-bidjar">
                    <div class="input">
                        <form>
                            <span class="text-label">NIP</span>
                            <input placeholder="Masukkan NIP">
                        </form>
                    </div>

                    <div class="input">
                        <form>
                            <span class="text-label">Bidang Ajar</span>
                            <input placeholder="Masukkan Bidang Ajar">
                        </form>
                    </div>
                </div>

                <div class="email">
                    <div class="input">
                        <form>
                            <span class="text-label">E-Mail</span>
                            <input placeholder="Masukkan alamat email">
                        </form>
                    </div>
                </div>

                <div class="password">
                    <div class="input">
                        <form>
                            <span class="text-label">Kata Sandi</span>
                            <input type="password" placeholder="Masukkan kata sandi">
                        </form>
                    </div>

                    <div class="input">
                        <form>
                            <span class="text-label">Ulangi Kata Sandi</span>
                            <input type="password"  placeholder="Masukkan kata sandi">
                        </form>
                    </div>
                </div>

                <div class="button-daftar">
                    <a href="/login" class="btn btn-registrasi-guru">Daftar</a>
                </div>

        </div>
    </div>
    
@endsection