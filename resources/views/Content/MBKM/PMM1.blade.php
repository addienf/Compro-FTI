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

        @if (session('success'))
            <div class="alert alert-success p-1" id="successMessage">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger p-1" id="successMessage">
                {{ session('error') }}
            </div>
        @endif

        @auth
            <div class="btn-tambah">
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addPMM">Tambah
                    Data</a>
            </div>
        @endauth

        <div class="container-table">
            <table id="test" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Asal Prodi</th>
                        <th>Tahun</th>
                        @auth
                            <th>Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fauzan</td>
                        <td>System Architect</td>
                        <td>Cimahi</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>
                            <div class="d-flex justify-content-center mt-1">
                                <a class="btn-primary mx-2 fa-solid fa-pen-to-square p-1" data-bs-toggle="modal"
                                    data-bs-target=""></a>
                                <a class="btn-danger mx-2 fas fa-trash p-1" data-bs-toggle="modal" data-bs-target=""></a>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addPMM" tabindex="-1" aria-labelledby="addPMMLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPMMLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addKGT" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp-pmm1" class="col-form-label d-flex flex-start">NRP</label>
                                <input type="text" class="form-control" id="nrp-pmm1" name="NRP" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-pmm1" class="col-form-label d-flex flex-start">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama-pmm1" name="Nama" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="asalprodi-pmm1" class="col-form-label d-flex flex-start">Asal Prodi</label>
                                <input type="text" class="form-control" id="asalprodi-pmm1" name="AsalProdi"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="tahun-pmm1" class="col-form-label d-flex flex-start">Tahun Ajaran</label>
                                <input type="number" class="form-control" id="tahun-pmm1" name="Tahun" required></input>
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
    </div>
    <script src="js/dropdown.js"></script>
@endsection
