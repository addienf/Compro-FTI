@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style2row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15 (3).png') }}" alt="...">
        </div>
        <div class="drop-container">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Menu</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li data-url="{{ url('KegiatanMahasiswa') }}">Kegiatan Mahasiswa</li>
                    <li data-url="{{ url('PrestasiMahasiswa') }}">Prestasi Mahasiswa</li>
                    <li data-url="{{ url('Lomba') }}">Lomba</li>
                </ul>
            </div>
        </div>
        <div class="options-container">
            <a class="option active-option" href="{{ url('PKM') }}">PKM</a>
            @auth
                <a type="button" class="option active-option" data-bs-toggle="modal" data-bs-target="#addPenelitian">Tambah
                    Penelitian</a>
            @endauth
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

        <div class="card-container">
            @foreach ($data as $penelitian)
                <div class="card" style="background-image: url('{{ asset('img/' . $penelitian['ImgPenelitian']) }}');"
                    onclick="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $penelitian['JudulPenelitian'] }}</h5>
                        <p class="card-text">{{ $penelitian['DescPenelitian'] }}</p>
                        @auth
                            <div class="d-flex justify-content-center align-items-center z-index-1">
                                <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $penelitian->IdPenelitian }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteModal{{ $penelitian->IdPenelitian }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        @endauth
                    </div>
                </div>

                {{-- Modals --}}
                {{-- Delete Data --}}
                <div class="modal fade" id="deleteModal{{ $penelitian->IdPenelitian }}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModalLabel{{ $penelitian->IdPenelitian }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $penelitian->IdPenelitian }}">Konfirmasi
                                    Hapus
                                </h5>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus Penelitian ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="{{ route('Penelitian.Destroy', $penelitian->IdPenelitian) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Edit Data --}}
                <div class="modal fade" id="editModal{{ $penelitian->IdPenelitian }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel{{ $penelitian->IdPenelitian }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $penelitian->IdPenelitian }}">Edit
                                    Kegiatan
                                </h5>
                            </div>
                            <form action="{{ route('Penelitian.Update', $penelitian->IdPenelitian) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="judul-penelitian" class="col-form-label d-flex flex-start">Judul
                                            Penelitian</label>
                                        <input type="text" class="form-control" id="judul-penelitian"
                                            name="JudulPenelitian" value="{{ $penelitian->JudulPenelitian }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi-penelitian"
                                            class="col-form-label d-flex flex-start">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi-penelitian" name="DescPenelitian" required>{{ $penelitian->DescPenelitian }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="img-kegiatan" class="col-form-label d-flex flex-start">Dokumentasi
                                            Penelitian</label>
                                        <input class="form-control" type="file" id="img-kegiatan" name="ImgPenelitian"
                                            accept="image/*">
                                        @if ($penelitian->ImgPenelitian)
                                            <div class="mt-2">
                                                <img src="{{ asset('img/' . $penelitian->ImgPenelitian) }}"
                                                    alt="Dokumentasi Penelitian" style="max-width: 200px;">
                                            </div>
                                        @endif
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
        </div>

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addPenelitian" tabindex="-1" aria-labelledby="addPenelitianLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPenelitianLabel">Tambah Penelitian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPenelitian" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-penelitian" class="col-form-label d-flex flex-start">Judul
                                    Penelitian</label>
                                <input type="text" class="form-control" id="judul-penelitian" name="JudulPenelitian"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-penelitian"
                                    class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-penelitian" name="DescPenelitian" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-penelitian" class="col-form-label d-flex flex-start">Dokumentasi
                                    Penelitian</label>
                                <input class="form-control" type="file" id="img-penelitian" name="ImgPenelitian"
                                    required accept="image/*">
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
