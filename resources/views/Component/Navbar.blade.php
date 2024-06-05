<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="stroke navbar" id="mainNav">
    <button class="hamburger" id="hamburger">&#9776;</button>
    <a href= "{{ url('/') }}">
        <img src="{{ asset('img\itenass.png') }}" width="100px" height="25px"alt="Logo image" />
    </a>
    <ul>
        <li><a href="{{ url('Fakultas') }}">Profil</a></li>
        <li><a href="{{ url('Akademik') }}">Akademik</a></li>
        <li><a href="{{ url('KegiatanMahasiswa') }}">Kemahasiswaan</a></li>
        <li><a href="{{ url('PMM') }}">MBKM</a></li>
        <li><a href="{{ url('Tracer') }}">Tracer Study</a></li>
        <li><a href="{{ url('Kerjasama') }}">Kerjasama</a></li>
        <li><a href="{{ url('Dokumen') }}">Dokumen</a></li>
    </ul>
</div>
<div class="navbottom stroke">
    <ul>
        <li><a href="{{ url('Berita') }}">Berita</a></li>
        <li><a href="{{ url('Penelitian') }}">Penelitian</a></li>
        <li><a href="{{ url('PKM') }}">PKM</a></li>
        <li><a href="{{ url('Publikasi') }}">Publikasi</a></li>
        <li><a href="{{ url('Penjamin') }}">Penjaminan Mutu</a></li>
        @auth
            <li><a href="{{ url('Logout') }}">Logout</a></li>
        @endauth
        @guest
            <li><a href="{{ url('Login') }}">Login</a></li>
        @endguest
    </ul>
</div>
<script src="js/dropdown.js"></script>
