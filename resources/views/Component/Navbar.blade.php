<link rel="stylesheet" href="{{ asset('css\navbar.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="stroke navbar" id="mainNav">
    <button class="hamburger" id="hamburger">&#9776;</button>
    <img src="img\itenass.png" width="100px" height="25px"alt="Logo image" />
    <ul>
        <li><a href="#">Profil</a></li>
        <li><a href="{{ url('Akademik') }}">Akademik</a></li>
        <li><a href="{{ url('KegiatanMahasiswa') }}">Kemahasiswaan</a></li>
        <li><a href="{{ url('PMM') }}">MBKM</a></li>
        <li><a href="">Tracer Study</a></li>
        <li><a href="{{ url('Kerjasama') }}">Kerjasama</a></li>
        <li><a href="#">Dokumen</a></li>
    </ul>
</div>
<div class="navbottom stroke">
    <ul>
        <li><a href="{{ url('Penelitian') }}">Penelitian</a></li>
        <li><a href="{{ url('PKM') }}">PKM</a></li>
        <li><a href="#contact">Publikasi</a></li>
        <li><a href="#contact">Penjaminan Mutu</a></li>
    </ul>
</div>
<script src="js/dropdown.js"></script>
