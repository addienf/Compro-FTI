@extends('Layout.layout')
@section('title', 'Akademik')
<link rel="stylesheet" href="{{ asset('css\style.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img\Rectangle 15.png') }}" class="header-img2" alt="...">
                </div>
            </div>
        </div>
        <div class="akademik"> Program Sarjana </div>
        <div class="options-container-akademik">
            <a href="{{ url('Akademik') }}"><button class="options1">Sarjana</button></a>
            <a href="{{ url('Akademik2') }}"><button class="options">Pasca Sarjana</button></a>
        </div>
        <div class="card-container-akademik">
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">Baik Sekali</p>
                    <div class="card-little-akademik">Program Studi Teknik Elektro</div>
                </div>
            </div>
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">A</p>
                    <div class="card-little-akademik">Program Studi Teknik Mesin</div>
                </div>
            </div>
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">A</p>
                    <div class="card-little-akademik">Program Studi Teknik Industri</div>
                </div>
            </div>
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">Baik Sekali</p>
                    <div class="card-little-akademik">Program Studi Teknik Kimia</div>
                </div>
            </div>
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">A</p>
                    <div class="card-little-akademik">Program Studi Informatika</div>
                </div>
            </div>
            <div class="card-akademik" style="width: 18rem;">
                <img src="{{ asset('img\exp2.png') }}" class="card-img-top" alt="...">
                <div class="card-content">
                    <p class="card-text-akademik">B</p>
                    <div class="card-little-akademik">Program Studi Sistem Informasi </div>
                </div>
            </div>
        </div>
        <div class="akademik"> Jadwal Ujian</div>
        <div class="ujian"> </div>
        <div class="akademik"> Kalender Akademik</div>
        <div class="kalender"> </div>
        <div class="akademik"> Kebijakan dan Peraturan Akademik</div>
        <div class="bijak"> </div>
    </div>
    @include('Component.Footer')
@endsection
