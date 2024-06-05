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
            <a class="option dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pertukaran Mahasiswa
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="option dropdown-item active-option" href="{{ url('PMM') }}">Pertukaran Mahasiswa
                        ITENAS</a>
                </li>
                <li><a class="option dropdown-item active-option" href="{{ url('PMM-Out') }}">Pertukaran Mahasiswa
                        Outbound</a>
                </li>
            </ul>
            {{-- <a class="option active-option" href="{{ url('PMM') }}">Pertukaran Mahasiswa</a> --}}
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
            <div class="btn-tambah mb-4">
                <a type="button" class="option active-option w-100" data-bs-toggle="modal" data-bs-target="#addPMM">Tambah
                    Data</a>
            </div>
        @endauth
        <div class="btn-tambah">
            <h3 class="w-100">Pertukaran Mahasiswa Inbound</h3>
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
                        @auth
                            <th>Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $pmm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pmm['NIM'] }}</td>
                            <td>{{ $pmm['Nama'] }}</td>
                            <td>{{ $pmm['AsalProdi'] }}</td>
                            <td>{{ $pmm['Tahun'] }}</td>
                            @auth
                                <td>
                                    <div class="d-flex justify-content-center mt-1">
                                        <a class="btn-primary mx-2 fa-solid fa-pen-to-square p-1" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $pmm->IdMBKM }}" style="cursor: pointer;"></a>
                                        <a class="btn-danger mx-2 fas fa-trash p-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $pmm->IdMBKM }}" style="cursor: pointer;"></a>
                                    </div>
                                </td>
                            @endauth
                        </tr>

                        {{-- Modals --}}
                        {{-- Delete Data --}}
                        <div class="modal fade" id="deleteModal{{ $pmm->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel{{ $pmm->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $pmm->IdMBKM }}">Konfirmasi
                                            Hapus
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus kegiatan ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('PMM.Destroy', $pmm->IdMBKM) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editModal{{ $pmm->IdMBKM }}" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel{{ $pmm->IdMBKM }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $pmm->IdMBKM }}">Edit Kegiatan
                                        </h5>
                                    </div>
                                    <form action="{{ route('PMM.Update', $pmm->IdMBKM) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nrp-magang" class="col-form-label d-flex flex-start">NRP</label>
                                                <input type="text" class="form-control" id="nrp-magang" name="NIM"
                                                    value="{{ $pmm->NIM }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama-magang" class="col-form-label d-flex flex-start">Nama
                                                    Mahasiswa</label>
                                                <input type="text" class="form-control" id="nama-magang"
                                                    name="Nama" value="{{ $pmm->Nama }}" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="IdJenisPertukaran"
                                                    class="col-form-label d-flex flex-start">Jenis Pertukaran</label>
                                                <select name="IdJenisPertukaran" id="IdJenisPertukaran"
                                                    class="form-select">
                                                    @foreach ($data2 as $jenis)
                                                        <option value="{{ $jenis->IdJenisPertukaran }}"
                                                            @if (old('IdJenisPertukaran', $pmm->IdJenisPertukaran) == $jenis->IdJenisPertukaran) selected @endif>
                                                            {{ $jenis->NamaJenisPertukaran }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="asal-prodi-pmm" class="col-form-label d-flex flex-start">Asal
                                                    Prodi</label>
                                                <input type="text" class="form-control" id="asal-prodi-pmm"
                                                    value="{{ $pmm->AsalProdi }}" name="AsalProdi" required></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahun-pmm"
                                                    class="col-form-label d-flex flex-start">Tahun</label>
                                                <input type="number" class="form-control" id="tahun-pmm"
                                                    value="{{ $pmm->Tahun }}" name="Tahun" required></input>
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
        <div class="modal fade" id="addPMM" tabindex="-1" aria-labelledby="addPMMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPMMLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPMM" method="POST" enctype="multipart/form-data">
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
                                <label for="IdJenisPertukaran" class="col-form-label d-flex flex-start">Jenis
                                    Pertukaran</label>
                                <select name="IdJenisPertukaran" id="IdJenisPertukaran" class="form-select" required>
                                    @foreach ($data2 as $jenis)
                                        <option value="{{ $jenis->IdJenisPertukaran }}">{{ $jenis->NamaJenisPertukaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="asalprodi-pmm1" class="col-form-label d-flex flex-start">Asal Prodi</label>
                                <input type="text" class="form-control" id="asalprodi-pmm1" name="AsalProdi"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="tahun-pmm1" class="col-form-label d-flex flex-start">Tahun Ajaran</label>
                                <input type="number" class="form-control" id="tahun-pmm1" name="Tahun"
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
    @include('Component.Footer')
@endsection
