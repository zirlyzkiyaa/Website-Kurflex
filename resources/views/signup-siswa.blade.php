@extends('layouts.main')

@section('container')

    <div class="pad-container-guru-siswa">
        <div class="kiri-siswa">
            <div class="gambar-signup-siswa">
                <img src="/assets/image/awal/{{ $image_signup_siswa }}" alt="register siswa" width="400px">
            </div>
        </div>

        <div class="kanan-siswa">
            <div class="bagian-judul">
                <h3>Registrasi Siswa</h3>
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
                    <a href="/login" class="btn btn-registrasi-siswa">Daftar</a>
                </div>

        </div>
    </div>
    
@endsection