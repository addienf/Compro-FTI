@extends('Layout.layout')
@section('title', 'PMM')
<link rel="stylesheet" href="{{ asset('css\pmm.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="container-header-up">
        <ul>
            <li>
                <a href="#">Pertukaran Mahasiswa <i class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('PMM') }}">Pertukaran Mahasiswa Antar Prodi Itenas</a></li>
                    <li><a href="{{ url('PMM1') }}">Pertukaran Mahasiswa Merdeka Inbound</a></li>
                    <li><a href="{{ url('PMM2') }}">Pertukaran Mahasiswa Merdeka Outbound</a></li>
                </ul>
            </li>
            <li><a href="#">Magang</a></li>
            <li><a href="#">KKN Tematik</a></li>
            <li><a href="#">Penelitian</a></li>
            <li><a href="#">PKM</a></li>
        </ul>
    </div>
    <div class="container-header-down">
        <ul>
            <li><a href="#">Kewirausahaan</a></li>
            <li><a href="#">Asisten Mengajar</a></li>
            <li><a href="#">Studi Independen</a></li>
        </ul>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Asal Kampus</th>
                    <th>Prodi</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>992023168</td>
                    <td>Putri Ayu Dwi Lestari</td>
                    <td>IIB Darmajaya</td>
                    <td>Sistem Informasi</td>
                    <td>2021</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>2</td>
                    <td>992023166</td>
                    <td>Nyoman Mindari</td>
                    <td>IIB Darmajaya</td>
                    <td>Sistem Informasi</td>
                    <td>2021</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="js/dropdown.js"></script>
@endsection
