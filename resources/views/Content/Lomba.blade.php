@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15 (2).png') }}" alt="...">
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
            <a class="option active-option" href="{{ url('KegiatanMahasiswa') }}">Kegiatan Mahasiswa</a>
            <a class="option active-option" href="{{ url('PrestasiMahasiswa') }}">Prestasi Mahasiswa</a>
            <a class="option active-option" href="{{ url('Lomba') }}">Lomba</a>
            @auth
                <a type="button" class="option active-option" data-bs-toggle="modal" data-bs-target="#addLomba">Tambah
                    Lomba</a>
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
            @foreach ($data as $lg)
                <div class="card" style="">
                    <img src="{{ asset('img/' . $lg['ImgLomba']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lg['JudulLomba'] }}</h5>
                        <p class="card-text">{{ $lg['DescLomba'] }}</p>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn-view" data-bs-toggle="modal"
                                data-bs-target="#unfinishedFeatureModal">Selengkapnya</button>
                            @auth
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                        data-target="#editModal{{ $lg->IdLomba }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal{{ $lg->IdLomba }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>

                {{-- Modals --}}
                {{-- Delete Data --}}
                <div class="modal fade" id="deleteModal{{ $lg->IdLomba }}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModalLabel{{ $lg->IdLomba }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $lg->IdLomba }}">Konfirmasi Hapus
                                </h5>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus lomba ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="{{ route('Lomba.Destroy', $lg->IdLomba) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Edit Data --}}
                <div class="modal fade" id="editModal{{ $lg->IdLomba }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel{{ $lg->IdLomba }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $lg->IdLomba }}">Edit Lomba</h5>
                            </div>
                            <form action="{{ route('Lomba.Update', $lg->IdLomba) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="judul-lomba" class="col-form-label d-flex flex-start">Judul
                                            Lomba</label>
                                        <input type="text" class="form-control" id="judul-lomba" name="JudulLomba"
                                            value="{{ $lg->JudulLomba }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi-lomba"
                                            class="col-form-label d-flex flex-start">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi-lomba" name="DescLomba" required>{{ $lg->DescLomba }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="img-lomba" class="col-form-label d-flex flex-start">Dokumentasi
                                            Lomba</label>
                                        <input class="form-control" type="file" id="img-lomba" name="ImgLomba"
                                            accept="image/*">
                                        @if ($lg->ImgLomba)
                                            <div class="mt-2">
                                                <img src="{{ asset('img/' . $lg->ImgLomba) }}" alt="Dokumentasi Lomba"
                                                    style="max-width: 200px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <div class="modal fade" id="addLomba" tabindex="-1" aria-labelledby="addLombaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLombaLabel">Tambah Lomba</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addLb" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-lomba" class="col-form-label d-flex flex-start">Judul Lomba</label>
                                <input type="text" class="form-control" id="judul-Lomba" name="JudulLomba" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-lomba" class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-lomba" name="DescLomba" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-lomba" class="col-form-label d-flex flex-start">Dokumentasi
                                    Lomba</label>
                                <input class="form-control" type="file" id="img-lomba" name="ImgLomba" required
                                    accept="image/*">
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
