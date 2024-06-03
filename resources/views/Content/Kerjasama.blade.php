@extends('Layout.layout')
@section('title', 'Kerjasama Internasional')
<link rel="stylesheet" href="{{ asset('css\kerjasama.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body" id="content">
        <div class="header-img d-flex container-fluid">
            <img src="{{ asset('img\Rectangle 15.png') }}" alt="...">
        </div>
        <div class="options-container">
            <a class="option active-option" href="{{ url('Kerjasama') }}">Nasional</a>
            <a class="option active-option" href="{{ url('Kerjasama-I') }}">Internasional</a>
            @auth
                <a type="button" class="option active-option" data-bs-toggle="modal" data-bs-target="#addKj">Tambah
                    Kegiatan</a>
            @endauth
        </div>
        <div data-aos="fade-up">
            <div class="container-table">
                <div class="table-data">
                    <table id="test" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Mitra</th>
                                <th>Jenis Kegiatan</th>
                                <th>Tridarma 1</th>
                                <th>Tridarma 2</th>
                                <th>Tridarma 3</th>
                                <th>Mulai</th>
                                <th>Berakhir</th>
                                <th>Manfaat</th>
                                @auth
                                    <th>Action</th>
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $kj)
                                <tr>
                                    <td>{{ $kj['NamaMitra'] }}</td>
                                    <td>{{ $kj['NamaJenisKerjasama'] }}</td>
                                    <td>
                                        @if ($kj->Tridarma1)
                                            <div class="d-flex justify-content-center">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kj->Tridarma2)
                                            <div class="d-flex justify-content-center">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kj->Tridarma3)
                                            <div class="d-flex justify-content-center">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>{{ $kj['Mulai'] }}</td>
                                    <td>{{ $kj['Berakhir'] }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-1">
                                            <a class="btn-primary mx-2 fa-solid fa-bars-staggered p-1"
                                                data-bs-toggle="modal" style="text-decoration: none; cursor: pointer;"
                                                data-bs-target="#Manfaat{{ $kj->IdKerjasama }}"></a>
                                        </div>
                                    </td>
                                    @auth
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-primary mx-2" data-toggle="modal"
                                                    data-target="#editModal{{ $kj->IdKerjasama }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal{{ $kj->IdKerjasama }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    @endauth
                                </tr>

                                {{-- Modals --}}
                                {{-- Manfaat --}}
                                <div class="modal fade" id="Manfaat{{ $kj->IdKerjasama }}" tabindex="-1" role="dialog"
                                    aria-labelledby="ManfaatLabel{{ $kj->IdKerjasama }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ManfaatLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{ $kj['Manfaat'] }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Edit Data --}}
                                <div class="modal fade" id="editModal{{ $kj->IdKerjasama }}" tabindex="-1"
                                    aria-labelledby="editModal{{ $kj->IdKerjasama }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModal{{ $kj->IdKerjasama }}Label">Edit
                                                    Kegiatan
                                                </h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('Kerjasama.Update', $kj->IdKerjasama) }}" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="nama-mitra"
                                                            class="col-form-label d-flex flex-start">Nama
                                                            Mitra</label>
                                                        <input type="text" class="form-control" id="nama-mitra"
                                                            name="NamaMitra" value="{{ $kj->NamaMitra }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="IdJenisKerjasama"
                                                            class="col-form-label d-flex flex-start">Jenis Kerjasama</label>
                                                        <select name="IdJenisKerjasama" id="IdJenisKerjasama"
                                                            class="form-select" required>
                                                            @foreach ($data2 as $jenis)
                                                                <option value="{{ $jenis->IdJenisKerjasama }}"
                                                                    @if (old('IdJenisKerjasama', $kj->IdJenisKerjasama) == $jenis->IdJenisKerjasama) selected @endif>
                                                                    {{ $jenis->NamaJenisKerjasama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="Tridarma[1]"
                                                            id="flexCheckbox1">
                                                        <label class="form-check-label d-flex flex-start"
                                                            for="flexCheckbox1">
                                                            Tridarma1
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                            name="Tridarma[2]" id="flexCheckbox2">
                                                        <label class="form-check-label d-flex flex-start"
                                                            for="flexCheckbox2">
                                                            Tridarma2
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                            name="Tridarma[3]" id="flexCheckbox3">
                                                        <label class="form-check-label d-flex flex-start"
                                                            for="flexCheckbox3">
                                                            Tridarma3
                                                        </label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="mulai-kerjasama"
                                                            class="col-form-label d-flex flex-start">Mulai
                                                            Kerjasama</label>
                                                        <input type="date" class="form-control" id="mulai-kerjasama"
                                                            name="Mulai" value="{{ $kj->Mulai }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kerjasama-berakhir"
                                                            class="col-form-label d-flex flex-start">Akhir
                                                            Kerjasama</label>
                                                        <input type="date" class="form-control"
                                                            id="kerjasama-berakhir" name="Berakhir"
                                                            value="{{ $kj->Berakhir }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="manfaat-kerjasama"
                                                            class="col-form-label d-flex flex-start">Manfaat
                                                            Kerjasama</label>
                                                        <input type="text" class="form-control" id="manfaat-kerjasama"
                                                            name="Manfaat" value="{{ $kj->Manfaat }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer mt-2">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Data --}}
                                <div class="modal fade" id="deleteModal{{ $kj->IdKerjasama }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel{{ $kj->IdKerjasama }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $kj->IdKerjasama }}">
                                                    Konfirmasi
                                                    Hapus
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus lomba ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('Kerjasama.Destroy', $kj->IdKerjasama) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Tambah Data --}}
        <div class="modal fade" id="addKj" tabindex="-1" aria-labelledby="addKjLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addKjLabel">Tambah Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="addKj" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nama-mitra" class="col-form-label d-flex flex-start">Nama Mitra</label>
                                <input type="text" class="form-control" id="nama-mitra" name="NamaMitra" required>
                            </div>
                            <div class="mb-3">
                                <label for="IdJenisKerjasama" class="col-form-label d-flex flex-start">Jenis
                                    Kerjasama</label>
                                <select name="IdJenisKerjasama" id="IdJenisKerjasama" class="form-select" required>
                                    @foreach ($data2 as $jenis)
                                        <option value="{{ $jenis->IdJenisKerjasama }}">{{ $jenis->NamaJenisKerjasama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Tridarma[1]" id="flexCheckbox1">
                                <label class="form-check-label d-flex flex-start" for="flexCheckbox1">
                                    Tridarma1
                                </label>
                                <input class="form-check-input" type="checkbox" name="Tridarma[2]" id="flexCheckbox2">
                                <label class="form-check-label d-flex flex-start" for="flexCheckbox2">
                                    Tridarma2
                                </label>
                                <input class="form-check-input" type="checkbox" name="Tridarma[3]" id="flexCheckbox3">
                                <label class="form-check-label d-flex flex-start" for="flexCheckbox3">
                                    Tridarma3
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="mulai-kerjasama" class="col-form-label d-flex flex-start">Mulai
                                    Kerjasama</label>
                                <input type="date" class="form-control" id="mulai-kerjasama" name="Mulai" required>
                            </div>
                            <div class="mb-3">
                                <label for="kerjasama-berakhir" class="col-form-label d-flex flex-start">Akhir
                                    Kerjasama</label>
                                <input type="date" class="form-control" id="kerjasama-berakhir" name="Berakhir"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="manfaat-kerjasama" class="col-form-label d-flex flex-start">Manfaat
                                    Kerjasama</label>
                                <input type="text" class="form-control" id="manfaat-kerjasama" name="Manfaat"
                                    required>
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
