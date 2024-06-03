@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\style2row.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15 (1).png') }}" alt="...">
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
                    Prestasi</a>
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
        <div data-aos="fade-up">
            <div class="card-container">
                @foreach ($data as $pres)
                    <div class="card" style="background-image: url('{{ asset('img/' . $pres['ImgPrestasi']) }}');"
                        onclick="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pres['JudulPrestasi'] }}</h5>
                            <p class="card-text">{{ $pres['DescPrestasi'] }}</p>
                            @auth
                                <div class="d-flex justify-content-center align-items-center z-index-1">
                                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $pres->IdPrestasi }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal{{ $pres->IdPrestasi }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @endauth
                        </div>
                    </div>

                    {{-- Modals --}}
                    {{-- Delete Data --}}
                    <div class="modal fade" id="deleteModal{{ $pres->IdPrestasi }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel{{ $pres->IdPrestasi }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $pres->IdPrestasi }}">Konfirmasi Hapus
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus kegiatan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('Prestasi.Destroy', $pres->IdPrestasi) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Edit Data --}}
                    <div class="modal fade" id="editModal{{ $pres->IdPrestasi }}" tabindex="-1" role="dialog"
                        aria-labelledby="editModalLabel{{ $pres->IdPrestasi }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $pres->IdPrestasi }}">Edit Kegiatan</h5>
                                </div>
                                <form action="{{ route('Prestasi.Update', $pres->IdPrestasi) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="judul-kegiatan" class="col-form-label d-flex flex-start">Judul
                                                Kegiatan</label>
                                            <input type="text" class="form-control" id="judul-kegiatan"
                                                name="JudulPrestasi" value="{{ $pres->JudulPrestasi }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi-kegiatan"
                                                class="col-form-label d-flex flex-start">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi-kegiatan" name="DescPrestasi" required>{{ $pres->DescPrestasi }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img-kegiatan" class="col-form-label d-flex flex-start">Dokumentasi
                                                Kegiatan</label>
                                            <input class="form-control" type="file" id="img-kegiatan"
                                                name="ImgPrestasi" accept="image/*">
                                            @if ($pres->ImgPrestasi)
                                                <div class="mt-2">
                                                    <img src="{{ asset('img/' . $pres->ImgPrestasi) }}"
                                                        alt="Dokumentasi Prestasi" style="max-width: 200px;">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Modals --}}
        {{-- Tambah Data --}}
        <div class="modal fade" id="addKegiatan" tabindex="-1" aria-labelledby="addKegiatanLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addKegiatanLabel">Tambah Prestasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPres" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-prestasi" class="col-form-label d-flex flex-start">Judul
                                    Prestasi</label>
                                <input type="text" class="form-control" id="judul-prestasi" name="JudulPrestasi"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-prestasi" class="col-form-label d-flex flex-start">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi-prestasi" name="DescPrestasi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-prestasi" class="col-form-label d-flex flex-start">Dokumentasi
                                    Prestasi</label>
                                <input class="form-control" type="file" id="img-prestasi" name="ImgPrestasi" required
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
            <h2>Sorry!</h2>
            <p>Fitur yang anda pilih belum tersedia :(</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>
    <script src="js/dropdown.js"></script>
    {{-- @include('Component.Footer') --}}
@endsection
