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
            <div class="m-5">
                <a href="{{ url('Berita') }}" class="btn-view px-3 py-2" style="border: 2px solid #252525;">Berita
                    Lainya</a>
            </div>
        </div>
        <!-- end pengumuman -->
    </div>
    {{-- @include('Component.Footer') --}}
@endsection
