@extends('layouts.main')

@section('container')

<div class="boxMateri">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/image/guru/BANNER MATPEL 1.png" class="d-block w-100" alt="Banner Matpel">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/image/guru/BANNER MATPEL 1.png" class="d-block w-100" alt="Banner Matpel">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/image/guru/BANNER MATPEL 1.png" class="d-block w-100" alt="Banner Matpel">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/image/guru/BANNER MATPEL 1.png" class="d-block w-100" alt="Banner Matpel">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


    <div class="materi">
        <h3>Judul Materi Pelajaran</h3>
        <ul>
            <li>Jumlah Materi</li>
            <li>Alokasi Waktu</li>
        </ul>
    </div>

    <div class="buttonMateri">
        <a href="listMateri"><button>Membaca Selanjutnya..</button></a>
    </div>
 
</div>

@endsection