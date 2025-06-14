<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('awal', [
        "title" => "Tampilan Awal",
        "image" => "tampilan awal.png"
    ]);
});

Route::get('/user', function () {
    return view('user', [
        "title" => "User",
        "image_user" => "user.png"
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "Sign Up",
        "image_guru" => "sign up guru.png",
        "image_siswa" => "sign up siswa.png"
    ]);
});

Route::get('/signup-guru', function () {
    return view('signup-guru', [
        "title" => "Sign Up Guru",
        "image_signup_guru" => "register guru.png"
    ]);
});

Route::get('/signup-siswa', function () {
    return view('signup-siswa', [
        "title" => "Sign Up Siswa",
        "image_signup_siswa" => "register siswa.png"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Log In",
        "image_login1" => "log in 1.png",
        "image_login2" => "log in 2.png"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "image_home_guru" => "home.png",
    ]);
});

Route::get('/kurikulum', function () {
    return view('kurikulum', [
        "title" => "Kurikulum",
    ]);
});

Route::get('/postKurikulum', function () {
    return view('postKurikulum', [
        "title" => "Kurikulum",
        "image_post_kurikulum" => "ktsp.png",
    ]);
});

Route::get('/materi', function () {
    return view('materi', [
        "title" => "Materi",
    ]);
});

Route::get('/materi2', function () {
    return view('materi2', [
        "title" => "Materi",
    ]);
});


Route::get('/listMateri', function () {
    return view('listMateri', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri1', function () {
    return view('isiMateri1', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri2', function () {
    return view('isiMateri2', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri3', function () {
    return view('isiMateri3', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri4', function () {
    return view('isiMateri4', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri5', function () {
    return view('isiMateri5', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri6', function () {
    return view('isiMateri6', [
        "title" => "Materi",
    ]);
});

Route::get('/isiMateri5', function () {
    return view('isiMateri5', [
        "title" => "Materi",
    ]);
});

Route::get('/lks', function () {
    return view('lks', [
        "title" => "LKS",
        "image_contohsoal" => "contoh soal.png",
        "image_buatsoal" => "buat soal.png"
    ]);
});

Route::get('/lks-contoh-soal', function () {
    return view('lks-contoh-soal',[
        "title" => "LKS"
    ]);
});

Route::get('/lks-membuat-soal', function () {
    return view('lks-membuat-soal',[
        "title" => "LKS"
    ]);
});

Route::get('/inovasi', function () {
    return view('inovasi', [
        "title" => "Inovasi",
        "image_inovasi1" => "melihat inovasi.png",
        "image_inovasi2" => "membuat inovasi.png"
    ]);
});

Route::get('/melihat-inovasi', function () {
    return view('melihat-inovasi', [
        "title" => "Inovasi"
    ]);
});

Route::get('/isi-inovasi', function () {
    return view('isi-inovasi', [
        "title" => "Inovasi",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat."
    ]);
});

Route::get('/membuat-inovasi', function () {
    return view('membuat-inovasi', [
        "title" => "Inovasi"
    ]);
});