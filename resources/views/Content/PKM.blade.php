@extends('Layout.layout')
@section('title', 'PKM')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 68.png') }}" alt="...">
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
                <a type="button" class="option active-option" data-bs-toggle="modal" data-bs-target="#addKegiatan">Tambah
                    PKM</a>
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
            @foreach ($data as $pkm)
                <div class="card" style="">
                    <img src="{{ asset('img/' . $pkm['ImgPKM']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pkm['JudulPKM'] }}</h5>
                        <p class="card-text">{{ $pkm['DescPKM'] }}</p>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn-view" data-bs-toggle="modal"
                                data-bs-target="#unfinishedFeatureModal">Selengkapnya</button>
                            @auth
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                        data-target="#editModal{{ $pkm->IdPKM }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal{{ $pkm->IdPKM }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>

                {{-- Modals --}}
                {{-- Delete Data --}}
                <div class="modal fade" id="deleteModal{{ $pkm->IdPKM }}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModalLabel{{ $pkm->IdPKM }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $pkm->IdPKM }}">Konfirmasi Hapus
                                </h5>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus kegiatan ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="{{ route('PKM.Destroy', $pkm->IdPKM) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Edit Data --}}
                <div class="modal fade" id="editModal{{ $pkm->IdPKM }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel{{ $pkm->IdPKM }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $pkm->IdPKM }}">Edit Kegiatan</h5>
                            </div>
                            <form action="{{ route('PKM.Update', $pkm->IdPKM) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="judul-pkm" class="col-form-label d-flex flex-start">Judul
                                            PKM</label>
                                        <input type="text" class="form-control" id="judul-pkm" name="JudulPKM"
                                            value="{{ $pkm->JudulPKM }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi-pkm"
                                            class="col-form-label d-flex flex-start">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi-pkm" name="DescPKM" required>{{ $pkm->DescPKM }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="img-pkm" class="col-form-label d-flex flex-start">Dokumentasi
                                            PKM</label>
                                        <input class="form-control" type="file" id="img-pkm" name="ImgPKM"
                                            accept="image/*">
                                        @if ($pkm->ImgPKM)
                                            <div class="mt-2">
                                                <img src="{{ asset('img/' . $pkm->ImgPKM) }}" alt="Dokumentasi PKM"
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
        <div class="modal fade" id="addKegiatan" tabindex="-1" aria-labelledby="addPKMLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPKMLabel">Tambah PKM</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPKM" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-pkm" class="col-form-label d-flex flex-start">Judul
                                    PKM</label>
                                <input type="text" class="form-control" id="judul-pkm" name="JudulPKM" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-pkm" class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-pkm" name="DescPKM" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-pkm" class="col-form-label d-flex flex-start">Dokumentasi
                                    PKM</label>
                                <input class="form-control" type="file" id="img-pkm" name="ImgPKM" required
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

        {{-- Alert --}}
        <div class="popup" id="popup">
            <img src="{{ asset('img\404-tick.png') }}" alt="">
            <h2>Maaf!</h2>
            <p>Fitur yang anda pilih belum tersedia :(</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>

        <div class="modal fade" id="unfinishedFeatureModal" tabindex="-1" aria-labelledby="unfinishedFeatureModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="unfinishedFeatureModalLabel">Fitur Belum Rampung</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Maaf, fitur yang Anda pilih belum selesai.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
    {{-- @include('Component.Footer') --}}
@endsection
