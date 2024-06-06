@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\berita.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="jud">
        <h1>Artikel Pengumuman FTI</h1>
    </div>

    <div class="options-container">
        @auth
            <a type="button" class="option active-option mt-5" data-bs-toggle="modal" data-bs-target="#addPengumuman">Tambah
                Pengumuman</a>
        @endauth
    </div>

    <div class="container main-news section">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                @if ($main)
                    <img class="thumb mb-3" src="{{ asset('img/' . $main['ImgPengumuman']) }}" alt="">
                    <h3>
                        <a class="font-medium" href="{{ url('Pengumuman-d/' . $main->IdPengumuman) }}">
                            {{ $main['Judul'] }}
                        </a>
                    </h3>
                @endif
            </div>

            <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                <div class="news-container">
                    @foreach ($sec->chunk(2) as $chunk)
                        <div class="news-column">
                            @foreach ($chunk as $brt)
                                <div class="news-item">
                                    <div class="image image-sm mb-1 mx-2">
                                        <img src="{{ asset('img/' . $brt->ImgPengumuman) }}" alt="">
                                    </div>
                                    <h3 class="mb-4">
                                        <a class="font-medium" href="{{ url('Pengumuman-d/' . $brt->IdPengumuman) }}">
                                            {{ $brt->Judul }}
                                        </a>
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- section Pengumuman -->
    <div class="wrapper">
        <div class="row mt-3">
            <div class="card-container mt-3">
                @foreach ($all as $Pengumuman)
                    <div class="card" style="">
                        <h5 class="card-title d-none">{{ $Pengumuman['IdPengumuman'] }}</h5>
                        <img src="{{ asset('img/' . $Pengumuman['ImgPengumuman']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $Pengumuman['Judul'] }}</h5>
                            <h5 class="card-title">{{ $Pengumuman['Tanggal'] }}</h5>
                            <p class="card-text">
                                {{ substr($Pengumuman['IsiPengumuman'], 0, 50) }}{{ strlen($Pengumuman['IsiPengumuman']) > 50 ? '...' : '' }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('Pengumuman-d/' . $Pengumuman->IdPengumuman) }}"
                                    class="btn-view">Selengkapnya</a>
                                @auth
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                            data-target="#editModal{{ $Pengumuman->IdPengumuman }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal{{ $Pengumuman->IdPengumuman }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>

                    {{-- Modals --}}
                    {{-- Delete Data --}}
                    <div class="modal fade" id="deleteModal{{ $Pengumuman->IdPengumuman }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel{{ $Pengumuman->IdPengumuman }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $Pengumuman->IdPengumuman }}">Konfirmasi
                                        Hapus
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus kegiatan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('Pengumuman.Destroy', $Pengumuman->IdPengumuman) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Edit Data --}}
                    <div class="modal fade" id="editModal{{ $Pengumuman->IdPengumuman }}" tabindex="-1" role="dialog"
                        aria-labelledby="editModalLabel{{ $Pengumuman->IdPengumuman }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header mt-5">
                                    <h5 class="modal-title" id="editModalLabel{{ $Pengumuman->IdPengumuman }}">Edit
                                        Pengumuman</h5>
                                </div>
                                <form action="{{ route('Pengumuman.Update', $Pengumuman->IdPengumuman) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="judul-Pengumuman" class="col-form-label d-flex flex-start">Judul
                                                Pengumuman</label>
                                            <input type="text" class="form-control" id="judul-Pengumuman" name="Judul"
                                                value="{{ $Pengumuman->Judul }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Penulis-Pengumuman" class="col-form-label d-flex flex-start">Penulis
                                                Pengumuman</label>
                                            <input type="text" class="form-control" id="Penulis-Pengumuman"
                                                name="Penulis" value="{{ $Pengumuman->Penulis }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Tanggal-Pengumuman"
                                                class="col-form-label d-flex flex-start">Tanggal
                                                Pengumuman</label>
                                            <input type="date" class="form-control" id="Tanggal-Pengumuman"
                                                name="Tanggal" value="{{ $Pengumuman->Tanggal }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi-kegiatan"
                                                class="col-form-label d-flex flex-start">isi</label>
                                            <textarea class="form-control" id="isi-kegiatan" name="IsiPengumuman" required>{{ $Pengumuman->IsiPengumuman }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img-Pengumuman"
                                                class="col-form-label d-flex flex-start">Dokumentasi
                                                Pengumuman</label>
                                            <input class="form-control" type="file" id="img-Pengumuman"
                                                name="ImgPengumuman" accept="image/*">
                                            @if ($Pengumuman->ImgPengumuman)
                                                <div class="mt-2">
                                                    <img src="{{ asset('img/' . $Pengumuman->ImgPengumuman) }}"
                                                        alt="Dokumentasi Pengumuman" style="max-width: 200px;">
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
        <div class="modal fade" id="addPengumuman" tabindex="-1" aria-labelledby="addPengumumanLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPengumumanLabel">Tambah Pengumuman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addPengumuman" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-Pengumuman" class="col-form-label d-flex flex-start">Judul
                                    Pengumuman</label>
                                <input type="text" class="form-control" id="judul-Pengumuman" name="Judul"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="Penulis-Pengumuman" class="col-form-label d-flex flex-start">Penulis
                                    Pengumuman</label>
                                <input type="text" class="form-control" id="Penulis-Pengumuman" name="Penulis"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="Tanggal-Pengumuman" class="col-form-label d-flex flex-start">Tanggal
                                    Pengumuman</label>
                                <input type="date" class="form-control" id="Tanggal-Pengumuman" name="Tanggal"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="isi-Pengumuman" class="col-form-label d-flex flex-start">Isi
                                    Pengumuman</label>
                                <textarea class="form-control" id="isi-Pengumuman" name="IsiPengumuman" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-Pengumuman" class="col-form-label d-flex flex-start">Dokumentasi
                                    Pengumuman</label>
                                <input class="form-control" type="file" id="img-Pengumuman" name="ImgPengumuman"
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
    <!-- end section Pengumuman -->

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    @include('Component.Footer')
@endsection
