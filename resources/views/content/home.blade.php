@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\home.css') }}">
@section('content')
    @include('Component.Navbar')
    <!-- carosel -->
    <div id="carouselExampleIndicators" class="carousel slide ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets\pexels-pixabay-247823.jpg" class="d-block w-100 h-20" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets\pexels-pixabay-267885.jpg" class="d-block w-100 h-20" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" class="d-block w-100 h-20" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carosel -->
    <!-- pengumuman -->
    <div class="container-fluid" id="container-fluid">
        <div class="options-container ">
            <a class="option active-option" href="{{ url('PMM') }}">Pengumuman</a>
            <a class="option active-option" href="{{ url('Magang') }}">Acara Selanjutnya</a>
        </div>
        <div data-aos="fade-up">
            <div class="container">
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end pengumuman -->

    <!-- tentang fti -->
    <div class="container-fluid" id="fti">
        <div data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-md-7">
                    <h2>Tentang FTI</h2>
                    <p class="">Fakultas Teknologi Industri merupakan Fakultas yang di desain untuk mempersiapkan
                        semua aspek yang dibutuhkan oleh dunia industri. Wawasan mengenai awal mula perindustrian hingga
                        perkembangan teknologinya yang kini menjadi Industri 4.0
                        wajib dipahami sebelum merancang dan mencipta inovasi baru. Fakultas Teknologi Industri menggali
                        potensi
                        yang dimiliki para mahasiswa melalui pemikiran-pemikiran terdepan dalam riset,
                        serta menumbuhkan kreativitas dan inovasi yang akan menjadi modal besar bagi roda penggerak kemajuan
                        industri.</p>
                    <a type="button" class="option1 active-option1" href="{{ url('Fakultas') }}">Pelajari Lebih
                        Lanjut</a>
                </div>
                <div class="col-md-2 ">
                    <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
                </div>
                <div class="col-md-2 mt-3">
                    <img src="assets\pexels-pixabay-267885.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end tentang fti -->

    <!-- banner -->
    <div class="">
        <div class="card text-bg-dark mb-10">
            <img src ="{{ asset('assets\fakta.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <div class="banner">
                    <div data-aos="fade-up">
                        <div class="row ml-10" style = "color: #fff">
                            <div class="col-2">
                                <i class="fa-solid fa-building-columns" style = "color: #fff"></i>
                                <h2>Berdiri Tahun 1933</h2>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-book-bookmark"style="color: #fff"></i>
                                <h2>Jumlah Prodi 8</h2>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-flask-vial "style="color: #fff"></i>
                                <h2>Labs 64+</h2>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-graduation-cap"style="color: #fff"></i>
                                <h2>120 Kelompok Keahlian</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end banner -->

    <!--berita-->

    <div class="">
        <div class="main-news mt-5 w-100">
            <div class="containercard">Berita Terkini</div>
            <div data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                        <img class="thumb mb-3" src="assets\pexels-pixabay-247823.jpg" alt="">
                        <h3>
                            <a class="font-medium" href="">
                                Juara 1 International
                            </a>
                        </h3>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                <div class="image image-sm mb-1">
                                    <img src="assets\pexels-pixabay-247823.jpg" alt="">
                                </div>
                                <h3 class="mb-4">
                                    <a class="font-medium" href="">
                                        Hibah Alat Praktikum FTI terbaru 2024 oleh pddikti jawabarat
                                    </a>
                                </h3>

                                <div class="image image-sm mb-1">
                                    <img src="assets\pexels-pixabay-247823.jpg" alt="">
                                </div>
                                <h3 class="mb-4">
                                    <a class="font-medium" href="">
                                        Akreditasi Prodi Sistem Informasi terbaru tahun 2024
                                    </a>
                                </h3>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                <div class="image image-sm mb-1">
                                    <img src="assets\pexels-pixabay-247823.jpg" alt="">
                                </div>
                                <h3 class="mb-4">
                                    <a class="font-medium" href="">
                                        Program Magang Fakultas FTI telah diuka untuk umum
                                    </a>
                                </h3>

                                <div class="image image-sm mb-1">
                                    <img src="assets\pexels-pixabay-247823.jpg" alt="">
                                </div>
                                <h3 class="mb-4">
                                    <a class="font-medium" href="">
                                        Penghargaan untuk fakultas fti yang telah menyelesaikan akreditasi
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--berita-->



    @include('Component.Footer')
@endsection
