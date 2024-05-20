@extends('Layout.layout')
@section('title', 'PMM')
<link rel="stylesheet" href="{{ asset('css\pmm.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="body">
        {{-- <div class="header">
            <img src="img/itenas.png" alt="LOGO ITENAS" />
            <input type="text" class="searchBar" placeholder="Search" />
        </div>
        <div class="header-menu">
            <ul>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Akademik</a></li>
                <li><a href="#">Kemahasiswaan</a></li>
                <li><a href="#">MBKM</a></li>
                <li><a href="#">Tracer Study</a></li>
                <li><a href="#">Kerja Sama</a></li>
                <li><a href="#">Dokumen</a></li>
            </ul>
        </div>
        <div class="underheader-menu">
            <ul>
                <li><a href="#">Penelitian</a></li>
                <li><a href="#">PKM</a></li>
                <li><a href="#">Publikasi</a></li>
                <li><a href="#">Penjaminan Mutu</a></li>
            </ul>
        </div>
        <img src="img/study.jpeg" alt="Foto Belajar" class="fotoBelajar" /> --}}
        <div class="container-header-up">
            <ul>
                <li>
                    <a href="#">Pertukaran Mahasiswa <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pertukaran Mahasiswa Antar Prodi Itenas</a></li>
                        <li><a href="#">Pertukaran Mahasiswa Merdeka Inbound</a></li>
                        <li><a href="#">Pertukaran Mahasiswa Merdeka Outbound</a></li>
                    </ul>
                </li>
                <li><a href="#">Magang</a></li>
                <li><a href="#">KKN Tematik</a></li>
                <li><a href="#">Penelitian</a></li>
                <li><a href="#">PKM</a></li>
            </ul>
        </div>
        <div class="container-header-down">
            <ul>
                <li><a href="#">Kewirausahaan</a></li>
                <li><a href="#">Asisten Mengajar</a></li>
                <li><a href="#">Studi Independen</a></li>
            </ul>
        </div>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Asal Prodi</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>⁠162020020</td>
                        <td>Muhammad Awalidzan Ahda</td>
                        <td>Sistem Informasi</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>⁠162020022</td>
                        <td> Muhammad Gaizka Agusti</td>
                        <td>Sistem Informasi</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>⁠162020024</td>
                        <td>Fauzan Addie</td>
                        <td>Sistem Informasi</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>⁠162020025</td>
                        <td>Zidan Chosyiyar Rochma</td>
                        <td>Sistem Informasi</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>992023168</td>
                        <td>Putri Ayu Dwi Lestari</td>
                        <td>Sistem Informasi</td>
                        <td>2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <footer>
            <table>
                <tr>
                    <th>Sumber Informasi Akademik</th>
                    <th>Sumber Informasi Institut</th>
                    <th>Link</th>
                    <th>Follow Us</th>
                </tr>
                <tr>
                    <td>Career Development Center</td>
                    <td>Lembaga Penelitian & Pengabdian Kepada Masyarakat</td>
                    <td>Itenas E-Magazine</td>
                    <td>
                        <button class="medsosBtn">
                            <i class="fa-brands fa-facebook-f"></i>
                        </button>
                        <button class="medsosBtn">
                            <i class="fa-brands fa-x-twitter"></i>
                        </button>
                        <button class="medsosBtn">
                            <i class="fa-brands fa-instagram"></i>
                        </button>
                        <button class="medsosBtn">
                            <i class="fa-brands fa-youtube"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kalender Akademik Sarjana</td>
                    <td>UPT Teknologi Informasi & Komunikasi</td>
                    <td>Jurnal Online</td>
                    <th>Kampus Institut Teknologi Nasional</th>
                </tr>
                <tr>
                    <td>Kalender Akademik Magister</td>
                    <td>Satuan Pengembangan Pembelajaran</td>
                    <td>Repository</td>
                    <td><b>Fakultas Teknologi Industri</b></td>
                </tr>
                <tr>
                    <td>SISFO SKK</td>
                    <td>Satuan Penjaminan Mutu</td>
                    <td>E-Book</td>
                    <td>Jl. PH. H. Mustofa No.23 Bandung 40124</td>
                </tr>
                <tr>
                    <td>Kemahasiswaan Itenas</td>
                    <td>Satuan Pengawas Internal</td>
                    <td>Download</td>
                    <td>
                        <a href="#" class="contactBtn"><i class="fa-solid fa-phone"></i> +62 22 7272215 ext 109</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Biro Akademik</td>
                    <td></td>
                    <td>
                        <a href="#" class="contactBtn"><i class="fa-solid fa-fax"></i> +62 22 7202892</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Biro Keuangan & Umum</td>
                    <td></td>
                    <td>
                        <a href="#" class="contactBtn"><i class="fa-solid fa-envelope"></i> humas@itenas.ac.id</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" class="contactBtn"><i class="fa-solid fa-location-dot"></i>
                            https://www.itenas.ac.id</a>
                    </td>
                </tr>
            </table>
        </footer> --}}
    </div>
    <script src="js/dropdown.js"></script>
@endsection
