@extends('Layout.layout')
@section('title', 'PKM')
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
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addPKM">Tambah
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
                        <th>Mitra</th>
                        <th>Judul</th>
                        <th>Periode</th>
                        @auth
                            <th>Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $pkm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pkm['NIM'] }}</td>
                            <td>{{ $pkm['Nama'] }}</td>
                            <td>{{ $pkm['NamaPerusahaan'] }}</td>
                            <td>{{ $pkm['Judul'] }}</td>
                            <td>{{ $pkm['Periode'] }}</td>
                            @auth
                                <td>
                                    <div class="d-flex justify-content-center mt-1">
                                        <a class="btn-primary mx-2 fa-solid fa-pen-to-square p-1" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $pkm->IdMBKM }}"></a>
                                        <a class="btn-danger mx-2 fas fa-trash p-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $pkm->IdMBKM }}"></a>
                                    </div>
                                </td>
                            @endauth
                        </tr>

                        {{-- Modals --}}
                        {{-- Delete Data --}}
                        <div class="modal fade" id="deleteModal{{ $pkm->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel{{ $pkm->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $pkm->IdMBKM }}">Konfirmasi
                                            Hapus
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus kegiatan ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('PKM.Destroy', $pkm->IdMBKM) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editModal{{ $pkm->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel{{ $pkm->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $pkm->IdMBKM }}">Edit Kegiatan
                                        </h5>
                                    </div>
                                    <form action="{{ route('PKM.Update', $pkm->IdMBKM) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nrp-magang" class="col-form-label d-flex flex-start">NRP</label>
                                                <input type="text" class="form-control" id="nrp-magang" name="NIM"
                                                    value="{{ $pkm->NIM }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama-magang" class="col-form-label d-flex flex-start">Nama
                                                    Mahasiswa</label>
                                                <input type="text" class="form-control" id="nama-magang" name="Nama"
                                                    value="{{ $pkm->Nama }}" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama-mitra" class="col-form-label d-flex flex-start">Nama
                                                    Mitra</label>
                                                <input type="text" class="form-control" id="nama-mitra"
                                                    value="{{ $pkm->NamaPerusahaan }}" name="NamaPerusahaan"
                                                    required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="judul-penelitian"
                                                    class="col-form-label d-flex flex-start">Judul</label>
                                                <input type="text" class="form-control" id="judul-penelitian"
                                                    value="{{ $pkm->Judul }}" name="Judul" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="periode-penelitian"
                                                    class="col-form-label d-flex flex-start">Periode Penelitian</label>
                                                <input type="text" class="form-control" id="periode-penelitian"
                                                    value="{{ $pkm->Periode }}" name="Periode" required></input>
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
        <div class="modal fade" id="addPKM" tabindex="-1" aria-labelledby="addPKMLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPKMLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPKM" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp-pmm1" class="col-form-label d-flex flex-start">NRP</label>
                                <input type="text" class="form-control" id="nrp-pmm1" name="NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-pmm1" class="col-form-label d-flex flex-start">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama-pmm1" name="Nama"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="nama-mitra" class="col-form-label d-flex flex-start">Nama
                                    Mitra</label>
                                <input type="text" class="form-control" id="nama-mitra" name="NamaPerusahaan"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="judul-penelitian" class="col-form-label d-flex flex-start">Judul</label>
                                <input type="text" class="form-control" id="judul-penelitian" name="Judul"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="periode-penelitian" class="col-form-label d-flex flex-start">Periode
                                    Penelitian</label>
                                <input type="text" class="form-control" id="periode-penelitian" name="Periode"
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
@endsection
