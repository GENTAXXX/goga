@extends('layout')

@section('title')
Buat Lowongan
@endsection

@section('konten')
    <div class="container-fluid mt-5">
        <div class="row text-center bg-search mt-5">
            <div class="col">
            </div>
        </div>
    </div>
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form>
                            <label>Nama Perusahaan/User</label><br>
                            <textarea type="text" class="form-control" cols="50" rows="1" placeholder="Perusahaan/User"></textarea>
                            <form>
                                <label>Deskripsi Perusahaan/User</label><br>
                                <textarea type="text" class="form-control" cols="50" rows="5" placeholder="Deskripsi Perusahaan/User"></textarea>
                                <label>Nama Pekerjaan</label><br>
                                <textarea type="text" class="form-control" cols="50" rows="1" placeholder="Nama Pekerjaan"></textarea> Status Pekerjaan :
                                <br>
                                <div class="radio-inline">
                                    <input type="radio" name="Status Pekerjaan"> Full Time
                                    <input type="radio" name="Status Pekerjaan"> Part Time
                                    <input type="radio" name="Status Pekerjaan"> Freelancer
                                    <br> Jenis Kelamin :
                                    <br>
                                    <div class="radio-inline">
                                        <input type="radio" name="kelamin"> Laki-Laki
                                        <input type="radio" name="kelamin"> Perempuan
                                    </div>  
                                    <br> Pendidikan :
                                    <br>
                                    <div class="radio-inline">
                                        <input type="radio" name="Pendidikan"> SD
                                        <input type="radio" name="Pendidikan"> SMP
                                        <input type="radio" name="Pendidikan"> SMA
                                        <br>
                                        <div class="radio-inline">
                                            <input type="radio" name="Pendidikan"> Diploma
                                            <input type="radio" name="Pendidikan"> S1
                                            <input type="radio" name="Pendidikan"> S2
                                            <input type="radio" name="Pendidikan"> Tidak mengenyam pendidikan
                                            <br>
                                            <br>
                                            <label>Kriteria</label><br>
                                            <textarea type="text" class="form-control" cols="40" rows="5" placeholder="Kriteria"></textarea>
                                            <label>Syarat</label><br>
                                            <textarea type="text" class="form-control" cols="40" rows="5" placeholder="Syarat"></textarea>
                                            <label>E-mail</label><br>
                                            <textarea type="text" class="form-control" cols="50" rows="1" placeholder="E-mail"></textarea>
                                            <label>Jangka Lamaran</label><br>
                                            <textarea type="data-target" class="form-control" cols="50" rows="1" placeholder="Jangka Lamaran"></textarea>
                                            <label>Pilih Logo</label><br>
                                            <input type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 login_container">
                                        <a href="halpilih.html">
                                            <button type="button" name="button" class="btn login_btn">Buat Lowongan</button>
                                        </a>
                                    </div>
                                    <div class="mt-4">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    