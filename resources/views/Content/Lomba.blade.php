@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15 (2).png') }}" alt="...">
        </div>
        <div class="drop-container">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Menu</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li data-url="{{ url('KegiatanMahasiswa') }}">Kegiatan Mahasiswa</li>
                    <li data-url="{{ url('PrestasiMahasiswa') }}">Prestasi Mahasiswa</li>
                    <li data-url="{{ url('Lomba') }}">Lomba</li>
                </ul>
            </div>
        </div>
        <div class="options-container">
            <a class="option active-option" href="{{ url('KegiatanMahasiswa') }}">Kegiatan Mahasiswa</a>
            <a class="option active-option" href="{{ url('PrestasiMahasiswa') }}">Prestasi Mahasiswa</a>
            <a class="option active-option" href="{{ url('Lomba') }}">Lomba</a>
            @auth
                <a type="button" class="option active-option" data-bs-toggle="modal" data-bs-target="#addLomba">Tambah
                    Kegiatan</a>
            @endauth
        </div>
        <div class="card-container">
            @foreach ($data as $lg)
                <div class="card" style="">
                    <img src="{{ asset('img/' . $lg['ImgLomba']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lg['JudulLomba'] }}</h5>
                        <p class="card-text">{{ $lg['DescLomba'] }}</p>
                        <div class="d-flex justify-content-between">
                            {{-- <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button> --}}
                            <button type="submit" class="btn-view" data-bs-toggle="modal"
                                data-bs-target="#unfinishedFeatureModal">Selengkapnya</button>
                            @auth
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    {{-- <a href="" class="btn btn-primary mx-2"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addLomba" tabindex="-1" aria-labelledby="addLombaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLombaLabel">Tambah Lomba</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addLb" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-lomba" class="col-form-label d-flex flex-start">Judul Lomba</label>
                                <input type="text" class="form-control" id="judul-Lomba" name="JudulLomba" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-lomba" class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-lomba" name="DescLomba" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-lomba" class="col-form-label d-flex flex-start">Dokumentasi
                                    Lomba</label>
                                <input class="form-control" type="file" id="img-lomba" name="ImgLomba" required
                                    accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Alert --}}
        <div class="popup" id="popup">
            <img src="{{ asset('img\404-tick.png') }}" alt="">
            <h2>Sorry!</h2>
            <p>Fitur yang anda pilih belum tersedia :(</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
    {{-- @include('Component.Footer') --}}
@endsection
