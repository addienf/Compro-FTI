@extends('Layout.layout')
@section('title', 'Akademik')
@yield('content')
<link rel="stylesheet" href="{{ asset('css\kerjasama.css') }}">
@include('Component.Navbar')
@section('content')
    <div class="header-img d-flex container-fluid">
        <img src="{{ asset('img\Rectangle 15.png') }}" alt="...">
    </div>
    <div class="container-fluid">
        <div class="atas"> Nasional</div>
        <table id="test" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Jenis Kegiatan</th>
                    <th>Mulai</th>
                    <th>Berakhir</th>
                    <th>Manfaat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fauzan</td>
                    <td>System Architect</td>
                    <td>Cimahi</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$1</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- @include('Component.Footer') --}}
@endsection
