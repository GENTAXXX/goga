@extends('layout')

@section('title')
Halaman Pilih
@endsection

@section('konten')
<div class="container-fluid position-fixed bg-content " style="z-index:999;
    background: url(image/cutbg2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
    <div class="row text-center mt-sm-5 pt-sm-5 d-flex justify-content-center">
        <div class="col">
            <div class="row text-center mt-2">
                <div class="col font-weight-bold align-content-lg-center">
                    <h1 class="selamat">Hari Ini Mau Ngapain?</h1>
                </div>
            </div>
            <div class="gbr-pilih mt-2">
                <a href="{{ route('lowongan') }}">
                    <img class="gbr-search ml-2 mr-5" src="image/Search2.jpg" alt="" style="width: 400px; height: 400px;">
                </a>
                <a href="buat_lowongan.html">
                    <img class="gbr-search ml-2" src="image/regis2.jpg" alt="" style="width: 400px; height: 400px;">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection