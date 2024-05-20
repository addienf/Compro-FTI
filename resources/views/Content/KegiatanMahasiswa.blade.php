@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="popup" id="popup">
            <img src="{{ asset('img\404-tick.png') }}" alt="">
            <h2>Sorry!</h2>
            <p>Fitur yang anda pilih belum tersedia :</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15.png') }}" alt="...">
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
        </div>
        <div class="card-container">
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175 (1).png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175 (2).png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
    @include('Component.Footer')

@endsection
