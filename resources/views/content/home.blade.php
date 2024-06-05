@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\home.css') }}">
@section('content')
    @include('Component.Navbar')
    <!-- carosel -->
    <div id="carouselExampleIndicators" class="carousel slide">
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
                <img src="assets\pexels-pixabay-247823.jpg" class="d-block w-100 h-20 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets\pexels-pixabay-267885.jpg" class="d-block w-100 h-20 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" class="d-block w-100 h-20 img-fluid"
                    alt="...">
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
            <div class="card-container mt-3">
                @foreach ($data as $berita)
                    <div class="card" style="">
                        <img src="{{ asset('img/' . $berita['ImgBerita']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita['Judul'] }}</h5>
                            <h5 class="card-title">{{ $berita['Tanggal'] }}</h5>
                            <p class="card-text">
                                {{ substr($berita['IsiBerita'], 0, 50) }}{{ strlen($berita['IsiBerita']) > 50 ? '...' : '' }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn-view" data-bs-toggle="modal" data-bs-target=""
                                    id="beritaButton"
                                    data-url="{{ url('Berita-d/' . $berita->IdBerita) }}">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    <div class="banner" style="background-image: url('assets/fakta.png');" data-aos="fade-up">
        <div class="overlay"></div>
        <div class="content">
            <div class="fact">
                <i class="fa-solid fa-building-columns"></i>
                <h2>Berdiri Tahun 1933</h2>
            </div>
            <div class="fact">
                <i class="fa-solid fa-book-bookmark"></i>
                <h2>Jumlah Prodi 8</h2>
            </div>
            <div class="fact">
                <i class="fa-solid fa-flask-vial"></i>
                <h2>Labs 64+</h2>
            </div>
            <div class="fact">
                <i class="fa-solid fa-graduation-cap"></i>
                <h2>120 Kelompok Keahlian</h2>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!--berita-->
    <div class="">
        <div class="main-news mt-5 w-100" data-aos="fade-up">
            <div class="containercard">Berita Terkini</div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                    @if ($main)
                        <img class="thumb mb-3" src="{{ asset('img/' . $main['ImgBerita']) }}" alt="">
                        <h3>
                            <a class="font-medium" href="">
                                {{ $main['Judul'] }}
                            </a>
                        </h3>
                    @endif
                </div>
                <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                    <div class="news-container">
                        @foreach ($sec->chunk(2) as $chunk)
                            <div class="news-column">
                                @foreach ($chunk as $brt)
                                    <div class="news-item">
                                        <div class="image image-sm mb-1 mx-2">
                                            <img src="{{ asset('img/' . $brt->ImgBerita) }}" alt="">
                                        </div>
                                        <h3 class="mb-4">
                                            <a class="font-medium" href="">
                                                {{ $brt->Judul }}
                                            </a>
                                        </h3>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--berita-->
    @include('Component.Footer')
@endsection
