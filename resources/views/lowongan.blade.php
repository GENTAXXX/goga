    @extends('layout')

    @section('title')
    Rekomendasi Lowongan
    @endsection
    
    @section('css')
    <style>
        /* show 3 items */
        
        @media (min-width: 768px) {
            /* left or forward direction */
            /* farthest right hidden item must be abso position for animations */
            /* right or prev direction */
            .carousel-inner .active,
            .carousel-inner .active+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item {
                display: block;
            }
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: none;
            }
            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }
            .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
    </style>
    @endsection
    @section('konten')
    <div class="container-fluid mt-5">
        <div class="row text-center bg-search mt-5">
            <div class="col m-auto">
                <form class="search pt-2 mt-lg-2">
                    <input class="src-form" type="text" placeholder="Cari.." required>
                    <input class="src-btn" type="button" value="Cari">
                </form>
            </div>
        </div>
    </div>
    <!-- card carousel -->
    <div class="container">
        <h1 class="text-center mb-4 mt-5">Rekomendasi Lowongan</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
                    <div class="carousel-item col-md-4 active">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-4">Designer</h4>
                                <p class="card-text">Lowongan dari :</p>
                                <h5>Percetakan Adi Surya</h5>
                                <p class="card-text">Gaji Sebesar :</p>
                                <h5>Rp 2.000.000,- /bulan</h5>
                                <p class="card-text">Jenis Pekerjaan :</p>
                                <h5>Percetakan Adi Surya</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="E:\Tugas Kuliah\Semester 3\Proyek App\FE\image\design.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-4">Designer</h4>
                            <p class="card-text">Lowongan dari :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text">Gaji Sebesar :</p>
                            <h5>Rp 2.000.000,- /bulan</h5>
                            <p class="card-text">Jenis Pekerjaan :</p>
                            <h5>Percetakan Adi Surya</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <h1 class="text-blue">
            Lowongan Pekerjaan
            <hr>
        </h1>
        <div class="row mt-4 ">
            <div class="col-8 ">
                @foreach($lowongan as $low)
                <a href="#">
                    <div>
                        <h2>{{ $low->nama_pekerjaan }}</h2>
                        <div class="shadow-lg p-0 pl-md-0 mb-5 bg-white rounded border">
                            <div class="row">
                                <div class="col-4">

                                    <img src="image/design.jpg" alt="" style="width: 200px; height: 200px;">
                                </div>
                                <div class="col-3 m-auto pl-0">
                                    <h5>Pekerjaan oleh :</h5>
                                    <h5>Pekerjaan oleh :</h5>
                                    <h5>Pekerjaan oleh :</h5>

                                </div>
                                <div class="col-5 m-auto pl-0">
                                    <h5>{{ $low->nama_perusahaan }}</h5>
                                    <h5>{{ $low->nama_perusahaan }}</h5>
                                    <h5>{{ $low->nama_perusahaan }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            <div class="col-4">
                <div class="shadow-lg p-0 mb-5 bg-white rounded border">
                    <div class="bg-kategori">
                        <h3 class="align-content-center text-white txt-kategori p-lg-3 m-0">
                            Kategori
                        </h3>
                    </div>
                    <div class="ml-md-3 p-lg-3">
                        <a href="#">
                            <h3>Sopir</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Masak</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Kebun</h3>
                        </a>
                        <a href="#">
                            <h3>Desainer</h3>
                        </a>
                        <a href="#">
                            <h3>Sopir</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Masak</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Kebun</h3>
                        </a>
                        <a href="#">
                            <h3>Desainer</h3>
                        </a>
                        <a href="#">
                            <h3>Sopir</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Masak</h3>
                        </a>
                        <a href="#">
                            <h3>Juru Kebun</h3>
                        </a>
                        <a href="#">
                            <h3>Desainer</h3>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#myCarousel").on("slide.bs.carousel", function(e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 3;
                var totalItems = $(".carousel-item").length;

                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item")
                                .eq(i)
                                .appendTo(".carousel-inner");
                        } else {
                            $(".carousel-item")
                                .eq(0)
                                .appendTo($(this).find(".carousel-inner"));
                        }
                    }
                }
            });
        });
    </script>
    @endsection