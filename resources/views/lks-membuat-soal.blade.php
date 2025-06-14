@extends('layouts.main')

@section('container')

    <div class="pad-container-membuat-soal">
        <div class="membuat-atas">
            <div class="judul-matpel">
                    <div class="input-soal" id="judul_matpel">
                        <form>
                            <span class="text-label">Mata Pelajaran: </span>
                            <input placeholder="Masukkan nama mata pelajaran">
                        </form>
                    </div>
            </div>

            <div class="materi-matpel">
                    <div class="input-soal" id="materi_matpel">
                        <form>
                            <span class="text-label">Materi Pelajaran: </span>
                            <input placeholder="Masukkan judul materi pelajaran">
                        </form>
                    </div>
            </div>

        </div>

        <div class="membuat-bawah">
            <p>Unggah file soal yang sudah ada</p>

            <div class="button-unggah-soal">
                <a href="#" class="btn btn-unggah-soal">Choose File</a>
            </div>

            <div class="button-simpan-soal">
                <a href="/lks-contoh-soal" class="btn btn-simpan-soal">Unggah</a>
            </div>
        </div>
    </div>

@endsection