@extends('layout.layout')
<link rel="stylesheet" href="{{ asset('css\beritadetail.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="jud">
        <h1>Artikel Berita FTI</h1>
    </div>

    <div class="container-fluid">
        <!-- gambar berita -->
        <div class="container-photo">
            @if ($detail->ImgBerita)
                <div class="mt-2">
                    <img src="{{ asset('img/' . $detail->ImgBerita) }}" alt="Dokumentasi Berita">
                </div>
            @endif
        </div>
        <!-- end gambar berita -->

        <!-- isi berita -->
        <div class="container">
            <p>
                {{ $detail->IsiBerita }}
            </p>
        </div>
        <!-- end isi berita -->

        <!-- detail berita -->
        <div class="container mt-3" id="person">
            <i class="fa-regular fa-newspaper">
                <p>Berita FTI</p>
            </i>
            <i class="fa-solid fa-user">
                <p>{{ $detail->Penulis }}</p>
            </i>
            <i class="fa-regular fa-calendar-days">
                <p>{{ $detail->Tanggal }}</p>
            </i>
        </div>
        <!-- end detail berita -->

        <!-- pengumuman -->

        <div class="container-fluid">
            <h4>Baca Juga</h4>
            <div class="card-container">
                <div class="card">
                    <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-dark btn-sm m-5">Berita Lainnya</button>
        </div>
        <!-- end pengumuman -->
    </div>
    {{-- @include('Component.Footer') --}}
@endsection
