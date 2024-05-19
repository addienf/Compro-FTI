@extends('Layout.layout')
@section('title', 'Penelitian')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 68.png') }}" alt="...">
        </div>
        <div class="options-container-pkm">
            <p>Pengabdian Kepada Masyarakat</p>
        </div>
        <div class="card-container">
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175 (8).png') }}" class="card-img-top-pkm" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175 (9).png') }}" class="card-img-top-pkm" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
            <div class="card" style="">
                <img src="{{ asset('img\Rectangle 175 (10).png') }}" class="card-img-top-pkm" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem consequuntur
                        quibusdam cupiditate impedit cum. Dicta accusamus eveniet officiis sed fugiat animi ipsum laboriosam
                        beatae quam exercitationem rerum, deleniti minus assumenda?</p>
                    <button type="submit" class="btn-view" onclick="openPopup()">Selengkapnya</button>
                </div>
            </div>
        </div>
        <div class="popup" id="popup">
            <img src="{{ asset('img\404-tick.png') }}" alt="">
            <h2>Sorry!</h2>
            <p>Fitur yang anda pilih belum tersedia :(</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
@endsection
