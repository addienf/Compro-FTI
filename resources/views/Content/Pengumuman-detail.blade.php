@extends('layout.layout')
<link rel="stylesheet" href="{{ asset('css\beritadetail.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="jud">
        <h1>Artikel Pengumuman FTI</h1>
    </div>

    <div class="container-fluid">
        <!-- gambar Pengumuman -->
        <div class="container-photo">
            @if ($detail->ImgPengumuman)
                <div class="mt-2">
                    <img src="{{ asset('img/' . $detail->ImgPengumuman) }}" alt="Dokumentasi Pengumuman">
                </div>
            @endif
        </div>
        <!-- end gambar Pengumuman -->

        <!-- isi Pengumuman -->
        <div class="container">
            <p>
                {{ $detail->IsiPengumuman }}
            </p>
        </div>
        <!-- end isi Pengumuman -->

        <!-- detail Pengumuman -->
        <div class="container mt-3" id="person">
            <i class="fa-regular fa-newspaper">
                <p>Pengumuman FTI</p>
            </i>
            <i class="fa-solid fa-user">
                <p>{{ $detail->Penulis }}</p>
            </i>
            <i class="fa-regular fa-calendar-days">
                <p>{{ $detail->Tanggal }}</p>
            </i>
        </div>
        <!-- end detail Pengumuman -->

        <!-- pengumuman -->

        <div class="container-fluid">
            <h4>Baca Juga</h4>
            <div class="card-container mt-3">
                @foreach ($data as $Pengumuman)
                    <div class="card" style="">
                        <img src="{{ asset('img/' . $Pengumuman['ImgPengumuman']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $Pengumuman['Judul'] }}</h5>
                            <h5 class="card-title">{{ $Pengumuman['Tanggal'] }}</h5>
                            <p class="card-text">
                                {{ substr($Pengumuman['IsiPengumuman'], 0, 50) }}{{ strlen($Pengumuman['IsiPengumuman']) > 50 ? '...' : '' }}
                            </p>
                            <div class="d-flex justify-content-between">
                                {{-- <button type="submit" class="btn-view" data-bs-toggle="modal" data-bs-target=""
                                    id="PengumumanButton"
                                    data-url="{{ url('Pengumuman-d/' . $Pengumuman->IdPengumuman) }}">Selengkapnya</button> --}}
                                <a href="{{ url('Pengumuman-d/' . $Pengumuman->IdPengumuman) }}"
                                    class="btn-view">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="m-5">
                <a href="{{ url('Pengumuman') }}" class="btn-view px-3 py-2" style="border: 2px solid #252525;">Pengumuman
                    Lainya</a>
            </div>
        </div>
        <!-- end pengumuman -->
    </div>
    {{-- @include('Component.Footer') --}}
@endsection
