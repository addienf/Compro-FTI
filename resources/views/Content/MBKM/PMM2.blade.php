@extends('Layout.layout')
@section('title', 'PMM')
<link rel="stylesheet" href="{{ asset('css\pmm.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="header-img d-flex container-fluid">
        <img src="{{ asset('img\Rectangle 15.png') }}" alt="...">
    </div>
    <div class="body">
        <div class="options-container">
            <a class="option active-option" href="{{ url('PMM') }}">Pertukaran Mahasiswa</a>
            <a class="option active-option" href="{{ url('Magang') }}">Magang</a>
            <a class="option active-option" href="{{ url('KKNTematik') }}">KKN Tematik</a>
            <a class="option active-option" href="{{ url('Penelitian') }}">Penelitian</a>
            <a class="option active-option" href="{{ url('PKM') }}">PKM</a>
            <a class="option active-option" href="{{ url('Kewirausahaan') }}">Kewirausahaan</a>
            <a class="option active-option" href="{{ url('AsistenManajer') }}">Asisten Manajer</a>
            <a class="option active-option" href="{{ url('StudiIndependen') }}">Studi Independen</a>
        </div>
    </div>
    <div class="container-table">
        <table id="test" class="table table-striped " style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Asal Prodi</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fauzan</td>
                    <td>System Architect</td>
                    <td>Cimahi</td>
                    <td>61</td>
                    <td>2011-04-25</td>

                </tr>
                <tr>
                    <td>Fauzan</td>
                    <td>System Architect</td>
                    <td>Cimahi</td>
                    <td>61</td>
                    <td>2011-04-25</td>

                </tr>
                <tr>
                    <td>Fauzan</td>
                    <td>System Architect</td>
                    <td>Cimahi</td>
                    <td>61</td>
                    <td>2011-04-25</td>

                </tr>
            </tbody>
        </table>
    </div>


    <script src="js/dropdown.js"></script>
@endsection
