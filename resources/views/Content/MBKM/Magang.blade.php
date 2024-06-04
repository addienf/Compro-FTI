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
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addMagang">Tambah
                    Data</a>
            </div>
        @endauth
        <div class="container-table">
            <table id="test" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama Mahasiswa</th>
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
                    @foreach ($data as $index => $mg)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mg['NIM'] }}</td>
                            <td>{{ $mg['Nama'] }}</td>
                            <td>{{ $mg['NamaPerusahaan'] }}</td>
                            <td>{{ $mg['Lokasi'] }}</td>
                            <td>{{ $mg['Judul'] }}</td>
                            <td>{{ $mg['Periode'] }}</td>
                            @auth
                                <td>
                                    <div class="d-flex justify-content-center mt-1">
                                        <a class="btn-primary mx-2 fa-solid fa-pen-to-square p-1" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $mg->IdMBKM }}"></a>
                                        <a class="btn-danger mx-2 fas fa-trash p-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $mg->IdMBKM }}"></a>
                                    </div>
                                </td>
                            @endauth
                        </tr>

                        {{-- Modals --}}
                        {{-- Delete Data --}}
                        <div class="modal fade" id="deleteModal{{ $mg->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel{{ $mg->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $mg->IdMBKM }}">Konfirmasi
                                            Hapus
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus kegiatan ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('Magang.Destroy', $mg->IdMBKM) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editModal{{ $mg->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel{{ $mg->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $mg->IdMBKM }}">Edit Kegiatan
                                        </h5>
                                    </div>
                                    <form action="{{ route('Magang.Update', $mg->IdMBKM) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nrp-magang" class="col-form-label d-flex flex-start">NRP</label>
                                                <input type="text" class="form-control" id="nrp-magang" name="NIM"
                                                    value="{{ $mg->NIM }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama-magang" class="col-form-label d-flex flex-start">Nama
                                                    Mahasiswa</label>
                                                <input type="text" class="form-control" id="nama-magang" name="Nama"
                                                    value="{{ $mg->Nama }}" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="namaperusahaan-magang"
                                                    class="col-form-label d-flex flex-start">Nama
                                                    Perusahaan</label>
                                                <input type="text" class="form-control" id="namaperusahaan-magang"
                                                    value="{{ $mg->NamaPerusahaan }}" name="NamaPerusahaan"
                                                    required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="lokasi-perusahaan-magang"
                                                    class="col-form-label d-flex flex-start">Lokasi
                                                    Perusahaan</label>
                                                <input type="text" class="form-control" id="lokasi-perusahaan-magang"
                                                    value="{{ $mg->Lokasi }}" name="Lokasi" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="judul-project-magang"
                                                    class="col-form-label d-flex flex-start">Judul
                                                    Project</label>
                                                <input type="text" class="form-control" id="judul-project-magang"
                                                    value="{{ $mg->Judul }}" name="Judul" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="periode-magang"
                                                    class="col-form-label d-flex flex-start">Periode</label>
                                                <input type="text" class="form-control" id="periode-magang"
                                                    value="{{ $mg->Periode }}" name="Periode" required></input>
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
        <div class="modal fade" id="addMagang" tabindex="-1" aria-labelledby="addMagangLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMagangLabel">Tambah Data Magang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addMagang" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp-magang" class="col-form-label d-flex flex-start">NRP</label>
                                <input type="text" class="form-control" id="nrp-magang" name="NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-magang" class="col-form-label d-flex flex-start">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama-magang" name="Nama"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="namaperusahaan-magang" class="col-form-label d-flex flex-start">Nama
                                    Perusahaan</label>
                                <input type="text" class="form-control" id="namaperusahaan-magang"
                                    name="NamaPerusahaan" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi-perusahaan-magang" class="col-form-label d-flex flex-start">Lokasi
                                    Perusahaan</label>
                                <input type="text" class="form-control" id="lokasi-perusahaan-magang" name="Lokasi"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="judul-project-magang" class="col-form-label d-flex flex-start">Judul
                                    Project</label>
                                <input type="text" class="form-control" id="judul-project-magang" name="Judul"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="periode-magang" class="col-form-label d-flex flex-start">Periode</label>
                                <input type="text" class="form-control" id="periode-magang" name="Periode"
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
