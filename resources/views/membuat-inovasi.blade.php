@extends('layouts.main')

@section('container')

    <div class="pad-container-membuat-inovasi">
        <div class="membuat-atas">
            <div class="judul-inovasi">
                    <div class="input-inovasi" id="judul_inovasi">
                        <form>
                            <span class="text-label">Judul Inovasi: </span>
                            <input placeholder="Masukkan Judul Inovasi">
                        </form>
                    </div>
            </div>

            <div class="kata-kunci">
                    <div class="input-inovasi" id="kata_kunci">
                        <form>
                            <span class="text-label">Kata Kunci: </span>
                            <input placeholder="Masukkan Kata Kunci (Maksimal 4 kata)">
                        </form>
                    </div>
            </div>

        </div>

        <div class="membuat-content">
            <div class="pembuatan-inovasi">
                    <form>
                        <span class="text-label">Inovasi Pembelajaran yang Diajukan</span>
                        <textarea name="buat-inovasi" id="buat_inovasi"></textarea> 
                    </form>
            </div>
        </div>

        <div class="membuat-bawah">
            <p>Atau unggah file yang sudah ada</p>

            <div class="button-unggah">
                <a href="#" class="btn btn-unggah-inovasi">Choose File</a>
            </div>

            <div class="button-posting">
                <a href="/isi-inovasi" class="btn btn-cek-inovasi">Posting</a>
            </div>
        </div>
    </div>

@endsection