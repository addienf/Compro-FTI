@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style3row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15.png') }}" alt="...">
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
                    Kegiatan</a>
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
            @foreach ($data as $kgt)
                <div class="card" style="">
                    <img src="{{ asset('img/' . $kgt['ImgKegiatan']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kgt['JudulKegiatan'] }}</h5>
                        <p class="card-text">
                            {{ substr($kgt['DescKegiatan'], 0, 50) }}{{ strlen($kgt['DescKegiatan']) > 50 ? '...' : '' }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn-view" data-bs-toggle="modal"
                                data-bs-target="#Manfaat{{ $kgt->IdKegiatan }}">Selengkapnya</button>
                            @auth
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                        data-target="#editModal{{ $kgt->IdKegiatan }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal{{ $kgt->IdKegiatan }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>

                {{-- Modals --}}
                {{-- Manfaat --}}
                <div class="modal fade" id="Manfaat{{ $kgt->IdKegiatan }}" tabindex="-1" role="dialog"
                    aria-labelledby="ManfaatLabel{{ $kgt->IdKegiatan }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ManfaatLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $kgt['DescKegiatan'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modals --}}
                {{-- Delete Data --}}
                <div class="modal fade" id="deleteModal{{ $kgt->IdKegiatan }}" tabindex="-1" role="dialog"
                    aria-labelledby="deleteModalLabel{{ $kgt->IdKegiatan }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $kgt->IdKegiatan }}">Konfirmasi Hapus
                                </h5>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus kegiatan ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="{{ route('Kegiatan.Destroy', $kgt->IdKegiatan) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Edit Data --}}
                <div class="modal fade" id="editModal{{ $kgt->IdKegiatan }}" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel{{ $kgt->IdKegiatan }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $kgt->IdKegiatan }}">Edit Kegiatan</h5>
                            </div>
                            <form action="{{ route('Kegiatan.Update', $kgt->IdKegiatan) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="judul-kegiatan" class="col-form-label d-flex flex-start">Judul
                                            Kegiatan</label>
                                        <input type="text" class="form-control" id="judul-kegiatan"
                                            name="JudulKegiatan" value="{{ $kgt->JudulKegiatan }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi-kegiatan"
                                            class="col-form-label d-flex flex-start">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi-kegiatan" name="DescKegiatan" required>{{ $kgt->DescKegiatan }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="img-kegiatan" class="col-form-label d-flex flex-start">Dokumentasi
                                            Kegiatan</label>
                                        <input class="form-control" type="file" id="img-kegiatan" name="ImgKegiatan"
                                            accept="image/*">
                                        @if ($kgt->ImgKegiatan)
                                            <div class="mt-2">
                                                <img src="{{ asset('img/' . $kgt->ImgKegiatan) }}"
                                                    alt="Dokumentasi Kegiatan" style="max-width: 200px;">
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
        <div class="modal fade" id="addKegiatan" tabindex="-1" aria-labelledby="addKegiatanLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addKegiatanLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addKGT" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-kegiatan" class="col-form-label d-flex flex-start">Judul
                                    Kegiatan</label>
                                <input type="text" class="form-control" id="judul-kegiatan" name="JudulKegiatan"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-kegiatan" class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-kegiatan" name="DescKegiatan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-kegiatan" class="col-form-label d-flex flex-start">Dokumentasi
                                    Kegiatan</label>
                                <input class="form-control" type="file" id="img-kegiatan" name="ImgKegiatan" required
                                    accept="image/*">
                                <label for="img-kegiatan" class="col-form-label d-flex flex-start">Tipe file yang
                                    diterima: jpg, png, jpeg</label>
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
