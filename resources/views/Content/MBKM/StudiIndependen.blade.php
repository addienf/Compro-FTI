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
            <a class="option active-option" href="{{ url('Penelitian-MBKM') }}">Penelitian</a>
            <a class="option active-option" href="{{ url('PKM-MBKM') }}">PKM</a>
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
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addSI">Tambah
                    Data</a>
            </div>
        @endauth
        <div data-aos="fade-up">
            <div class="container-table">
                <table id="test" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Nama Perusahaan</th>
                            <th>Lokasi</th>
                            <th>Judul Project</th>
                            <th>Periode</th>
                            @auth
                                <th>Action</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $asist)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $asist['NIM'] }}</td>
                                <td>{{ $asist['Nama'] }}</td>
                                <td>{{ $asist['NamaPerusahaan'] }}</td>
                                <td>{{ $asist['Lokasi'] }}</td>
                                <td>{{ $asist['Judul'] }}</td>
                                <td>{{ $asist['Periode'] }}</td>
                                @auth
                                    <td>
                                        <div class="d-flex justify-content-center mt-1">
                                            <a class="btn-primary mx-2 fa-solid fa-pen-to-square p-1" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $asist->IdMBKM }}"></a>
                                            <a class="btn-danger mx-2 fas fa-trash p-1" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $asist->IdMBKM }}"></a>
                                        </div>
                                    </td>
                                @endauth
                            </tr>

                            {{-- Modals --}}
                            {{-- Delete Data --}}
                            <div class="modal fade" id="deleteModal{{ $asist->IdMBKM }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel{{ $asist->IdMBKM }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $asist->IdMBKM }}">Konfirmasi
                                                Hapus
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus kegiatan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('SI.Destroy', $asist->IdMBKM) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editModal{{ $asist->IdMBKM }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel{{ $asist->IdMBKM }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $asist->IdMBKM }}">Edit Kegiatan
                                            </h5>
                                        </div>
                                        <form action="{{ route('SI.Update', $asist->IdMBKM) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nrp-magang"
                                                        class="col-form-label d-flex flex-start">NRP</label>
                                                    <input type="text" class="form-control" id="nrp-magang"
                                                        name="NIM" value="{{ $asist->NIM }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama-magang" class="col-form-label d-flex flex-start">Nama
                                                        Mahasiswa</label>
                                                    <input type="text" class="form-control" id="nama-magang"
                                                        name="Nama" value="{{ $asist->Nama }}" required></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama-perusahaan-magang"
                                                        class="col-form-label d-flex flex-start">Nama
                                                        Perusahaan</label>
                                                    <input type="text" class="form-control" id="nama-perusahaan-magang"
                                                        value="{{ $asist->NamaPerusahaan }}" name="NamaPerusahaan"
                                                        required></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lokasi-perusahaan-magang"
                                                        class="col-form-label d-flex flex-start">Lokasi
                                                        Perusahaan</label>
                                                    <input type="text" class="form-control"
                                                        id="lokasi-perusahaan-magang" value="{{ $asist->Lokasi }}"
                                                        name="Lokasi" required></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="judul-studi"
                                                        class="col-form-label d-flex flex-start">Judul
                                                        Studi</label>
                                                    <input type="text" class="form-control" id="judul-studi"
                                                        value="{{ $asist->Judul }}" name="Judul" required></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="periode-studi"
                                                        class="col-form-label d-flex flex-start">Periode</label>
                                                    <input type="number" class="form-control" id="periode-studi"
                                                        value="{{ $asist->Periode }}" name="Periode" required></input>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addSI" tabindex="-1" aria-labelledby="addSILabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSILabel">Tambah Data Studi Independen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addSI" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp-si" class="col-form-label d-flex flex-start">NRP</label>
                                <input type="text" class="form-control" id="nrp-si" name="NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-si" class="col-form-label d-flex flex-start">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama-si" name="Nama"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="nama-perusahaan-si" class="col-form-label d-flex flex-start">Nama
                                    Perusahaan</label>
                                <input type="text" class="form-control" id="nama-perusahaan-si" name="NamaPerusahaan"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi-si" class="col-form-label d-flex flex-start">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi-si" name="Lokasi"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="judul-project-si" class="col-form-label d-flex flex-start">Judul
                                    Project</label>
                                <input type="text" class="form-control" id="judul-project-si" name="Judul"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="periode-pmm1" class="col-form-label d-flex flex-start">Periode</label>
                                <input type="text" class="form-control" id="periode-pmm1" name="Periode"
                                    required></input>
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
    @include('Component.Footer')
@endsection
