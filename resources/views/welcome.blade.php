@extends('layout')

@section('title')
Goga
@endsection
    
@section('konten')
<h1>TES</h1>
        <div class="container-fluid position-fixed bg-content " style="z-index:999;
    background: url(image/cutbg2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
            <div class="row text-center mt-sm-5 pt-sm-5 d-flex justify-content-center">
                <div class="col">
                    <img class="gbr" src="image/logor.png" alt="" style="width: 156px;">
                </div>
            </div>
            <div class="row text-center mt-2 mb-3">
                <div class="col font-weight-bold align-content-lg-center">
                    <h1 class="selamat">SELAMAT DATANG DI</h1>
                    <h1 class="goga">GOGA</h1>
                    <h1 class="selamat">GOLEK YOUR GAWE HERE</h1>
                    <p class="desc">Job Search Application That Will Help You Find The Work And Labor You Need</p>
                </div>
            </div>
            <a href="{{ route('login') }}">
                <div class="row text-center mt-2">
                    <div class="col font-weight-bold align-content-lg-center">
                        <input class="btn btn-primary btn-mulai" type="submit" value="Mulai">
                    </div>
                </div>
            </a>
        </div>
@endsection