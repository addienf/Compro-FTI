@extends('Layout.layout')
@section('title', 'Penelitian')
<link rel="stylesheet" href="{{ asset('css\style2row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="popup" id="popup">
            <img src="{{ asset('img\404-tick.png') }}" alt="">
            <h2>Sorry!</h2>
            <p>Fitur yang anda pilih belum tersedia :(</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15 (3).png') }}" alt="...">
        </div>
        <div class="options-container-penelitian">
            <p>Data Penelitian</p>
        </div>
        <div class="card-container">
            <div class="card" style="background-image: url('{{ asset('img/Rectangle 184.png') }}');"
                onclick="openPopup()">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">This is some text within a card body. It will be clamped to two lines and
                        ellipsized if too long.</p>
                </div>
            </div>
            <div class="card" style="background-image: url('{{ asset('img/Rectangle 184 (1).png') }}');">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">This is some text within a card body. It will be clamped to two lines and
                        ellipsized if too long.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
@endsection
