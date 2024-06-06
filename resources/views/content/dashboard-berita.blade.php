@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\berita.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="jud">
        <h1>Artikel Berita FTI</h1>
    </div>

    <div class="options-container">
        @auth
            <a type="button" class="option active-option mt-5" data-bs-toggle="modal" data-bs-target="#addBerita">Tambah
                Berita</a>
        @endauth
    </div>

    <div class="container main-news section">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                @if ($main)
                    <img class="thumb mb-3" src="{{ asset('img/' . $main['ImgBerita']) }}" alt="">
                    <h3>
                        <a class="font-medium" href="{{ url('Berita-d/' . $main->IdBerita) }}">
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
                                        <img src="{{ asset('img/' . $brt->ImgBerita) }}" alt="">
                                    </div>
                                    <h3 class="mb-4">
                                        <a class="font-medium" href="{{ url('Berita-d/' . $brt->IdBerita) }}">
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


    <!-- section berita -->
    <div class="wrapper">
        <div class="row mt-3">
            <div class="card-container mt-3">
                @foreach ($all as $berita)
                    <div class="card" style="">
                        <h5 class="card-title d-none">{{ $berita['IdBerita'] }}</h5>
                        <img src="{{ asset('img/' . $berita['ImgBerita']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita['Judul'] }}</h5>
                            <h5 class="card-title">{{ $berita['Tanggal'] }}</h5>
                            <p class="card-text">
                                {{ substr($berita['IsiBerita'], 0, 50) }}{{ strlen($berita['IsiBerita']) > 50 ? '...' : '' }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('Berita-d/' . $berita->IdBerita) }}" class="btn-view">Selengkapnya</a>
                                @auth
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                            data-target="#editModal{{ $berita->IdBerita }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal{{ $berita->IdBerita }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>

                    {{-- Modals --}}
                    {{-- Delete Data --}}
                    <div class="modal fade" id="deleteModal{{ $berita->IdBerita }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel{{ $berita->IdBerita }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $berita->IdBerita }}">Konfirmasi
                                        Hapus
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus kegiatan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('Berita.Destroy', $berita->IdBerita) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Edit Data --}}
                    <div class="modal fade" id="editModal{{ $berita->IdBerita }}" tabindex="-1" role="dialog"
                        aria-labelledby="editModalLabel{{ $berita->IdBerita }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header mt-5">
                                    <h5 class="modal-title" id="editModalLabel{{ $berita->IdBerita }}">Edit Berita</h5>
                                </div>
                                <form action="{{ route('Berita.Update', $berita->IdBerita) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="judul-Berita" class="col-form-label d-flex flex-start">Judul
                                                Berita</label>
                                            <input type="text" class="form-control" id="judul-Berita" name="Judul"
                                                value="{{ $berita->Judul }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Penulis-Berita" class="col-form-label d-flex flex-start">Penulis
                                                Berita</label>
                                            <input type="text" class="form-control" id="Penulis-Berita"
                                                name="Penulis" value="{{ $berita->Penulis }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Tanggal-Berita" class="col-form-label d-flex flex-start">Tanggal
                                                Berita</label>
                                            <input type="date" class="form-control" id="Tanggal-Berita"
                                                name="Tanggal" value="{{ $berita->Tanggal }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi-kegiatan"
                                                class="col-form-label d-flex flex-start">isi</label>
                                            <textarea class="form-control" id="isi-kegiatan" name="IsiBerita" required>{{ $berita->IsiBerita }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img-Berita" class="col-form-label d-flex flex-start">Dokumentasi
                                                Berita</label>
                                            <input class="form-control" type="file" id="img-Berita" name="ImgBerita"
                                                accept="image/*">
                                            @if ($berita->ImgBerita)
                                                <div class="mt-2">
                                                    <img src="{{ asset('img/' . $berita->ImgBerita) }}"
                                                        alt="Dokumentasi Berita" style="max-width: 200px;">
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
        <div class="modal fade" id="addBerita" tabindex="-1" aria-labelledby="addBeritaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBeritaLabel">Tambah Berita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addBerita" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-Berita" class="col-form-label d-flex flex-start">Judul
                                    Berita</label>
                                <input type="text" class="form-control" id="judul-Berita" name="Judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="Penulis-Berita" class="col-form-label d-flex flex-start">Penulis
                                    Berita</label>
                                <input type="text" class="form-control" id="Penulis-Berita" name="Penulis" required>
                            </div>
                            <div class="mb-3">
                                <label for="Tanggal-Berita" class="col-form-label d-flex flex-start">Tanggal
                                    Berita</label>
                                <input type="date" class="form-control" id="Tanggal-Berita" name="Tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi-Berita" class="col-form-label d-flex flex-start">Isi Berita</label>
                                <textarea class="form-control" id="isi-Berita" name="IsiBerita" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img-Berita" class="col-form-label d-flex flex-start">Dokumentasi
                                    Berita</label>
                                <input class="form-control" type="file" id="img-Berita" name="ImgBerita" required
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
    <!-- end section berita -->

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
