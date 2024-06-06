@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\vismis.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="foto">
        <img src="assets\fakultas\fakultas.jpg" alt="">
    </div>
    <div class="container mt-5">
        <div class="row mt-5" id="vismis">
            <div class="col-5">
                <h2>Visi</h2>
                <p>Menjadi fakultas bereputasi dalam pengembangan ilmu pengetahuan dan teknologi industri
                    serta berperan aktif dalam pembangunan pada lingkup nasional dan global</p>
            </div>
            <div class="col-5">
                <h2>Misi</h2>
                <p>Mengkoordinasi dan mendorong seluruh potensi yang ada di fakultas untuk melaksanakan pendidikan,
                    penelitian dan pengabdian kepada masyarakat yang berkualitas tinggi agar dapat menghasilkan
                    sumber daya manusia yang unggul dan memiliki moral dan etika yang tinggi</p>
            </div>
        </div>
        <div data-aos="fade-up">
            <div class="row">
                <div class="col">
                    <h2>Tujuan Dan Sasaran</h2>
                    <p>1. Mengkoordinasi dan mengembangkan kegiatan administrasi serta penyelenggaraan proses pendidikan di
                        Jurusan/ program studi untuk membangun karakter lulusan yang kompeten pada bidangnya, terampil,
                        mandiri,
                        berjiwa entrepreneur serta memiliki moral dan etika yang baik;
                        <hr>
                        2. Mendorong budaya untuk melaksanakan dan mengembangkan penelitian dasar dan terapan yang hasilnya
                        dapat diaplikasikan, dipatenkan dan/atau karya ilmiahnya dapat dipublikasikan pada jurnal nasional
                        terakreditasi atau jurnal internasional terindeks basis data internasional bereputasi;
                        <hr>
                        3. Menyebarluaskan dan mendiseminasikan hasil studi dan penelitian terkait ilmu pengetahuan dan
                        teknologi melalui program pemberdayaan dan pengabdian kepada masyarakat;
                        <hr>
                        4. Membangun dan mengembangkan jejaring kerjasama strategis secara sinergi dan berkesinambungan
                        dengan
                        berbagai institusi pemerintah maupun swasta, di dalam dan luar negeri.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container" id="fti">
            <h2>Tentang FTI</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="lead">Fakultas Teknologi Industri merupakan Fakultas yang di desain untuk mempersiapkan
                        semua aspek yang dibutuhkan oleh dunia industri. Wawasan mengenai awal mula perindustrian hingga
                        perkembangan teknologinya yang kini menjadi Industri 4.0
                        wajib dipahami sebelum merancang dan mencipta inovasi baru. Fakultas Teknologi Industri menggali
                        potensi
                        yang dimiliki para mahasiswa melalui pemikiran-pemikiran terdepan dalam riset,
                        serta menumbuhkan kreativitas dan inovasi yang akan menjadi modal besar bagi roda penggerak kemajuan
                        industri.</p>
                </div>
                <div class="col-md-2 ">
                    <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container-fluid">
            <H2>Struktur Organisasi</H2>
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg"
                            alt="Avatar" class="image">
                        <div class="overlay">
                            <h3>Fauzan Addien</h3>
                            <h5>Bachelor of Information System</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3>Muhammad Gaizka</h3>
                            <h5>Bachelor of Information System</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg"
                            alt="Avatar" class="image">
                        <div class="overlay">
                            <h3>Zidan Chosyiyar</h3>
                            <h5>Bachelor of Information System</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3>Muhammad Awalidzan</h3>
                            <h5>Bachelor of Information System</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg"
                            alt="Avatar" class="image">
                        <div class="overlay">
                            <h3>Putri Ayu</h3>
                            <h5>Bachelor of Information System</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Component.Footer')
    @endsection
