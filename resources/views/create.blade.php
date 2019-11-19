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
                                <textarea type="text" class="form-control" cols="50" rows="1" placeholder="Nama Pekerjaan"></textarea>
                                <hr>
                                <div class="form-group">
                                  <label for="sel1">Status Pekerjaan :</label>
                                  <select class="form-control" id="sel1">
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Frelancer</option>
                                  </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <label for="sel1">Jenis Kelamin :</label>
                                  <select class="form-control" id="sel1">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                  </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <label for="sel1">Pendidikan :</label>
                                  <select class="form-control" id="sel1">
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>DIPLOMA</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>Tidak Mengenyam Pendidikan</option>
                                  </select>
                                </div>
                                <hr>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    