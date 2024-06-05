@extends('Layout.layout')
@section('title', 'KKN Tematik')
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
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addAsist">Tambah
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
                        <th>Lokasi</th>
                        <th>Tahun</th>
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
                            <td>{{ $asist['Lokasi'] }}</td>
                            <td>{{ $asist['Tahun'] }}</td>
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
                            <div class="modal-dialog modal-dialog-centered">
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
                                        <form action="{{ route('Asist.Destroy', $asist->IdMBKM) }}" method="POST">
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
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $asist->IdMBKM }}">Edit Kegiatan
                                        </h5>
                                    </div>
                                    <form action="{{ route('Asist.Update', $asist->IdMBKM) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nrp-magang" class="col-form-label d-flex flex-start">NRP</label>
                                                <input type="text" class="form-control" id="nrp-magang" name="NIM"
                                                    value="{{ $asist->NIM }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama-magang" class="col-form-label d-flex flex-start">Nama
                                                    Mahasiswa</label>
                                                <input type="text" class="form-control" id="nama-magang" name="Nama"
                                                    value="{{ $asist->Nama }}" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="lokasi-perusahaan-magang"
                                                    class="col-form-label d-flex flex-start">Lokasi
                                                    Perusahaan</label>
                                                <input type="text" class="form-control" id="lokasi-perusahaan-magang"
                                                    value="{{ $asist->Lokasi }}" name="Lokasi" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahun-mengajar" class="col-form-label d-flex flex-start">Tahun
                                                    Mengajar</label>
                                                <input type="number" class="form-control" id="tahun-mengajar"
                                                    value="{{ $asist->Tahun }}" name="Tahun" required></input>
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

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addAsist" tabindex="-1" aria-labelledby="addAsistLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAsistLabel">Tambah Data Asisten</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addAsist" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp-asist" class="col-form-label d-flex flex-start">NRP</label>
                                <input type="text" class="form-control" id="nrp-asist" name="NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-asist" class="col-form-label d-flex flex-start">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama-asist" name="Nama"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi-asist" class="col-form-label d-flex flex-start">Lokasi Asisten
                                    Manajer</label>
                                <input type="text" class="form-control" id="lokasi-asist" name="Lokasi"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="tahun-asist" class="col-form-label d-flex flex-start">Tahun</label>
                                <input type="number" class="form-control" id="tahun-asist" name="Tahun"
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
